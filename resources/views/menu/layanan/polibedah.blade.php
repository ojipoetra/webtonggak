@extends('menu.kerangka')
@section('content')
    <!-- CONTENT -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/penyakit-dalam.jpeg" class="img-fluid shadow rounded">
            <div class="col py-3">
                <h1>POLIKLINIK BEDAH</h1>
                <h5>Layan Kami Tersedia Poliklinik Bedah Umum</h5>
                <img src="assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                <hr>
            </div>
            <div class="col">
                <p>Poliklinik Bedah Umum memberikan pelayanan kesehatan rawat jalan untuk pelayanan kesehatan dalam proses pembedahan umum. Pelayanan yang ditangi di Poliklinik Bedah Umum adalah Operasi Kecil, Perawatan luka biasa/luka oleh karena DM, Perawatan luka post Operasi Hernia, Usus Buntu, Haemoroid (wasir), Konsultasi seputar proses pembedahan, dan lain-lain.

                    Saat ini kami didukung oleh dokter-dokter spesialis bedah umum yang berpengalaman dibidangnya, serta ditunjang peralatan medis yang lengkap dan memadai untuk memberikan pelayanan bagi anda dan keluarga lebih optimal.</p>
            </div>
        </div>
            @include('menu.layanan.linklayanan')
        </div>
    </div>
</div>

<a href="https://wa.me/+6285100579666" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>





<script src="../assets/js/jquery-3.6.1.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
