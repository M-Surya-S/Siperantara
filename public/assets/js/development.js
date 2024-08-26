//***** MENGUBAH GAMBAR *****/
// Fungsi untuk mengubah gambar
function updateImages(tabId) {
    const mainImage = document.getElementById('main-image');
    const imageTwo = document.getElementById('image-two');
    const imageThree = document.getElementById('image-three');

    if (tabId === 'townville-tab') {
        mainImage.src = mainImage.getAttribute('data-townville-src');
        imageTwo.src = imageTwo.getAttribute('data-townville-src');
        imageThree.src = imageThree.getAttribute('data-townville-src');
    } else if (tabId === 'nordville-tab') {
        mainImage.src = mainImage.getAttribute('data-nordville-src');
        imageTwo.src = imageTwo.getAttribute('data-nordville-src');
        imageThree.src = imageThree.getAttribute('data-nordville-src');
    } else if (tabId === 'hayfield-tab') {
        mainImage.src = mainImage.getAttribute('data-hayfield-src');
        imageTwo.src = imageTwo.getAttribute('data-hayfield-src');
        imageThree.src = imageThree.getAttribute('data-hayfield-src');
    }
}


// Menambahkan event listener pada tombol tab
document.getElementById('townville-tab').addEventListener('click', function() {
    updateImages('townville-tab');
});

document.getElementById('nordville-tab').addEventListener('click', function() {
    updateImages('nordville-tab');
});

document.getElementById('hayfield-tab').addEventListener('click', function() {
    updateImages('hayfield-tab');
});
