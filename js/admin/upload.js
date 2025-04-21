document.addEventListener('DOMContentLoaded', function() {
    const postForm = document.querySelector('.post-form');
    if (!postForm) return;

    const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5MB in bytes
    const ALLOWED_TYPES = ['image/jpeg', 'image/png', 'image/gif'];

    // Handle image selection and immediate upload
    document.getElementById('image_upload').addEventListener('change', async function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const statusDiv = document.getElementById('upload_status');
        const preview = document.getElementById('image_preview');

        // Validate file size
        if (file.size > MAX_FILE_SIZE) {
            statusDiv.innerHTML = '<div class="error-message">File size exceeds 5MB limit</div>';
            this.value = '';
            return;
        }

        // Validate file type
        if (!ALLOWED_TYPES.includes(file.type)) {
            statusDiv.innerHTML = '<div class="error-message">Invalid file type. Please use JPG, PNG, or GIF</div>';
            this.value = '';
            return;
        }

        try {
            const formData = new FormData();
            formData.append('image', file);
            
            statusDiv.innerHTML = '<div class="info-message">Uploading image...</div>';
            this.disabled = true;
            
            // Use the base URL from the page
            const baseUrl = document.querySelector('base').getAttribute('href');
            const response = await fetch(baseUrl + 'admin/blog/upload.php', {
                method: 'POST',
                body: formData
            });
            
            const data = await response.json();
            
            if (data.success) {
                document.getElementById('featured_image').value = data.url;
                preview.innerHTML = `
                    <img src="${data.url}" alt="Preview">
                    <button type="button" class="remove-image">Remove Image</button>
                `;
                statusDiv.innerHTML = '<div class="success-message">Image uploaded successfully!</div>';
                addRemoveImageHandler(preview);
            } else {
                statusDiv.innerHTML = `<div class="error-message">Upload failed: ${data.error}</div>`;
                console.error('Upload debug info:', data.debug);
            }
        } catch (error) {
            console.error('Error:', error);
            statusDiv.innerHTML = '<div class="error-message">Upload failed: Network error</div>';
        } finally {
            this.disabled = false;
        }
    });

    // Handle form submission
    postForm.addEventListener('submit', function(e) {
        // Form submits normally - no need to handle image upload here
        // as it's already been uploaded when the file was selected
    });

    // Add remove image functionality
    function addRemoveImageHandler(container) {
        const removeButton = container.querySelector('.remove-image');
        if (removeButton) {
            removeButton.addEventListener('click', function() {
                document.getElementById('featured_image').value = '';
                document.getElementById('image_upload').value = '';
                container.innerHTML = '';
                document.getElementById('upload_status').innerHTML = '';
            });
        }
    }

    // Initialize remove button for existing images
    const preview = document.getElementById('image_preview');
    if (preview) {
        addRemoveImageHandler(preview);
    }
}); 