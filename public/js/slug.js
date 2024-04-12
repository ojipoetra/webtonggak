const judul = document.getElementById('layanan');
const slug = document.getElementById('slug');
judul.addEventListener('change', function () {
    slug.value = judul.value.toLowerCase().split(' ').join('-');
    console.log(slug.value);
});
