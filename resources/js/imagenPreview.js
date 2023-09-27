/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************************!*\
  !*** ./resources/assets/vendor/js/imagenPreview.js ***!
  \*****************************************************/
function previewImage(event) {
  var imagePreview = document.getElementById('image-preview');
  var imageName = document.getElementById('image-name');
  var imageWeight = document.getElementById('image-weight');
  var file = event.target.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      imagePreview.style.display = 'block';
      imagePreview.src = e.target.result;
      imageName.textContent = "Nombre: ".concat(file.name);
      imageWeight.textContent = "Peso: ".concat(formatBytes(file.size));
    };
    reader.readAsDataURL(file);
  }
}
function formatBytes(bytes) {
  var decimals = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 2;
  if (bytes === 0) return '0 Bytes';
  var k = 1024;
  var dm = decimals < 0 ? 0 : decimals;
  var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
  var i = Math.floor(Math.log(bytes) / Math.log(k));
  return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}
function removeImage() {
  var imagePreview = document.getElementById('image-preview');
  var imageName = document.getElementById('image-name');
  var imageWeight = document.getElementById('image-weight');
  var imageInput = document.getElementById('image-input');
  imagePreview.style.display = 'none';
  imagePreview.src = '';
  imageName.textContent = 'Nombre de la Imagen';
  imageWeight.textContent = 'Peso de la Imagen';
  imageInput.value = null;
}
var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;