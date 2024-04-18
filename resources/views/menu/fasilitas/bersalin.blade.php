@extends('menu.kerangka')
@section('content')
    <!-- CONTENT -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/ruang-bersalin.jpeg" class="img-fluid shadow rounded">
            <div class="col py-3">
                <h1>RUANGAN BERSALIN</h1>
                <h5>Layan Kami Tersedia Ruangan Operasi</h5>
                <img src="assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                <hr>
            </div>
            <div class="col">
                <p>Ruang Bersalin ditunjang oleh tenaga dokter spesialis kandungan dan bidan yang profesional dengan pelayanan cepat dan ramah. Ruang besalin juga dilengkapi dengan alat persalinan normal yang lengkap dan terbaru.</p>
            </div>
        </div>
        @include('menu.fasilitas.linkfasilitas')
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
