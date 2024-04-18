@extends('menu.kerangka')
@section('content')
    <!-- CONTENT -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/poliklinik-anak.jpeg" class="img-fluid shadow rounded">
            <div class="col py-3">
                <h1>PERCOBAAN</h1>
                <h5>Layan Kami Tersedia Poliklinik Anak</h5>
                <img src="assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                <hr>
            </div>
            <div class="col">
                <p>Menjaga Kesehatan Anak adalah Prioritas utama Kami, oleh karena itu RS Tonggak Husada memiliki Dokter Spesialis Anak yang berpengalaman, Profesional dan Ramah terhadap Anak.
                    Ruang Poliklinik Anak yang di Design Khusus untuk kenyamanan Pasien Anak, Tempat Bermain pada Ruang Tunggu Poliklinik.
                </p>
            </div>
        </div>
        <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="list-group">
                <button type="button" class="rounded-top btn-green-top" aria-current="true">
                    <b>DAFTAR LAYANAN</b>
                </button>
                <a href="poliklinik-anak" class="a-none"><button type="button" class="list-group-item list-group-item-action active-green">Poliklinik Anak</button></a>
                <a href="poliklinik-penyakit-dalam" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Penyakit Dalam</button></a>
                <a href="poliklinik-bedah-umum" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Bedah Umum</button></a>
                <a href="poliklinik-kebidanan-dan-kandungan" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Kebidanan dan Kandungan</button></a>
                <a href="poliklinik-umum" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Umum</button></a>
                <a href="poliklinik-gigi" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Gigi</button></a>
                <a href="jadwal-dokter" class="a-none"><button type="button" class="list-group-item list-group-item-action">Jadwal Dokter</button></a>
            </div>
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
