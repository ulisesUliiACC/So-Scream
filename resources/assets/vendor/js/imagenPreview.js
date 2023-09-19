
    function previewImage(event) {
        const imagePreview = document.getElementById('image-preview');
        const imageName = document.getElementById('image-name');
        const imageWeight = document.getElementById('image-weight');

        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.style.display = 'block';
                imagePreview.src = e.target.result;
                imageName.textContent = `Nombre: ${file.name}`;
                imageWeight.textContent = `Peso: ${formatBytes(file.size)}`;
            };

            reader.readAsDataURL(file);
        }
    }

    function formatBytes(bytes, decimals = 2) {
        if (bytes === 0) return '0 Bytes';

        const k = 1024;
        const dm = decimals < 0 ? 0 : decimals;
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        const i = Math.floor(Math.log(bytes) / Math.log(k));

        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
    }

    function removeImage() {
        const imagePreview = document.getElementById('image-preview');
        const imageName = document.getElementById('image-name');
        const imageWeight = document.getElementById('image-weight');
        const imageInput = document.getElementById('image-input');

        imagePreview.style.display = 'none';
        imagePreview.src = '';
        imageName.textContent = 'Nombre de la Imagen';
        imageWeight.textContent = 'Peso de la Imagen';
        imageInput.value = null;
    }

