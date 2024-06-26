@extends('menu.kerangka')
@section('content')
    <!-- CONTENT -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/poliklinik-penyakit-dalam.jpg" class="img-fluid shadow rounded">
            <div class="col py-3">
                <h1>POLIKLINIK PENYAKIT DALAM</h1>
                <h5>Layan Kami Tersedia Poliklinik Penyakit Dalam</h5>
                <img src="assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                <hr>
            </div>
            <div class="col">
                <p>
                    Poliklinik Penyakit Dalam (Internist) merupakan salah satu unit layanan utama di Rumah Sakit Tonggak Husada. Poliklinik penyakit dalam ini memberikan pelayanan penanganan masalah kesehatan organ dalam tanpa bedah,
                    seperti diabetes melitus (kencing manis), sakit ginjal, sakit lambung, penyakit hati, dll
                </p>
                <p>Ditangani oleh Dokter ahli penyakit dalam yang profesional dan berpengalaman dibidangnya serta ditunjang dengan fasilitas yang memadai sesuai dengan kebutuhan pasien, keluhan pasien mengenai penyakit dalam dapat ditangani dengan baik.</p>
            </div>
        </div>
        @include('menu.layanan.linklayanan')
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
