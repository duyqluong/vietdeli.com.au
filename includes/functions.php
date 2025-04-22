<?php
/**
 * Creates a URL-friendly slug from a string
 * @param string $string The string to convert to a slug
 * @return string The slug
 */
function createSlug($string) {
    // Convert the string to lowercase
    $string = strtolower($string);
    
    // Replace non-alphanumeric characters with a dash
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    
    // Remove multiple consecutive dashes
    $string = preg_replace('/-+/', '-', $string);
    
    // Remove leading and trailing dashes
    $string = trim($string, '-');
    
    return $string;
} 