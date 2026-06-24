<?php
/**
 * Fetches Viet Deli's live Google rating with a 24-hour file cache.
 *
 * On the first call each day it makes two Google Places API requests:
 *   1. Find Place  — discovers the Place ID by business name + location
 *   2. Place Details — fetches current rating + review count
 *
 * The Place ID is stored in the cache file so repeat look-ups are skipped.
 * If the API is unreachable or the key is missing, the last cached value
 * is returned; if there is no cache yet, a hard-coded fallback is used.
 *
 * Requires: GOOGLE_PLACES_API_KEY in .env
 */

function getGoogleRating(): array
{
    $cacheFile = BASE_PATH . '/cache/google-rating.json';
    $cacheTTL  = 86400; // 24 hours in seconds

    // Return fresh cache when available
    if (_isCacheFresh($cacheFile, $cacheTTL)) {
        return _readCache($cacheFile);
    }

    // Load API key from environment
    $apiKey = getenv('GOOGLE_PLACES_API_KEY');
    if (!$apiKey || $apiKey === 'your_google_places_api_key_here') {
        return _fallback($cacheFile);
    }

    // Reuse cached Place ID to avoid an extra API call on every refresh
    $placeId = _readCache($cacheFile)['place_id'] ?? null;
    if (!$placeId) {
        $placeId = _fetchPlaceId($apiKey);
        if (!$placeId) {
            return _fallback($cacheFile);
        }
    }

    // Fetch current rating + review count
    $details = _fetchPlaceDetails($apiKey, $placeId);
    if (!$details) {
        return _fallback($cacheFile);
    }

    $result = [
        'rating'   => number_format((float) $details['rating'], 1),
        'count'    => (int) ($details['user_ratings_total'] ?? 0),
        'place_id' => $placeId,
        'updated'  => time(),
    ];

    _writeCache($cacheFile, $result);
    return $result;
}

// ── Private helpers ──────────────────────────────────────────────────────────

function _isCacheFresh(string $file, int $ttl): bool
{
    return file_exists($file) && (time() - filemtime($file)) < $ttl;
}

function _readCache(string $file): array
{
    if (!file_exists($file)) return [];
    return json_decode(file_get_contents($file), true) ?? [];
}

function _writeCache(string $file, array $data): void
{
    $dir = dirname($file);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

function _fallback(string $cacheFile): array
{
    // Try stale cache before using hard-coded values
    $stale = _readCache($cacheFile);
    if (!empty($stale['rating'])) {
        return $stale;
    }
    return ['rating' => '3.9', 'count' => 27, 'updated' => 0];
}

function _fetchPlaceId(string $apiKey): ?string
{
    $url = 'https://maps.googleapis.com/maps/api/place/findplacefromtext/json'
         . '?input='        . urlencode('Viet Deli Myaree Perth WA')
         . '&inputtype=textquery'
         . '&fields=place_id'
         . '&locationbias=point:-32.0442703,115.8099401'
         . '&key='          . urlencode($apiKey);

    $data = _apiGet($url);
    return $data['candidates'][0]['place_id'] ?? null;
}

function _fetchPlaceDetails(string $apiKey, string $placeId): ?array
{
    $url = 'https://maps.googleapis.com/maps/api/place/details/json'
         . '?place_id=' . urlencode($placeId)
         . '&fields=rating,user_ratings_total'
         . '&key='      . urlencode($apiKey);

    $data = _apiGet($url);
    return $data['result'] ?? null;
}

function _apiGet(string $url): array
{
    $ctx      = stream_context_create(['http' => ['timeout' => 5]]);
    $response = @file_get_contents($url, false, $ctx);
    if (!$response) return [];
    return json_decode($response, true) ?? [];
}
