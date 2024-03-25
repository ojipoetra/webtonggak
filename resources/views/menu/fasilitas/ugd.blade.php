@extends('menu.kerangka')
@section('content')
    <!-- CONTENT -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/ugd.jpeg" class="img-fluid shadow rounded">
            <div class="col py-3">
                <h1>RUANGAN UGD</h1>
                <h5>Layan Kami Tersedia UGD 24 Jam</h5>
                <img src="assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                <hr>
            </div>
            <div class="col">
                <p>Unit Gawat Darurat (UGD) yang beroprasi selama 24 Jam, dilengkapi dengan peralatan medis dan perlengkapan medis yang canggih dan lengkap serta tenaga medis yang tanggap dan cekatan sehingga dapat memberikan pertolongan - pertolongan pertama pada pasien gawat darurat dengan cepat.</p>
            </div>
        </div>
        <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="list-group">
                <button type="button" class="rounded-top btn-green-top" aria-current="true">
                    <b>DAFTAR FASILITAS</b>
                </button>
                <a href="" class="a-none"><button type="button" class="list-group-item list-group-item-action active-green">UGD</button></a>
                <a href="" class="a-none"><button type="button" class="list-group-item list-group-item-action">Instalasi Farmasi</button></a>
                <a href="" class="a-none"><button type="button" class="list-group-item list-group-item-action">Laboratorium</button></a>
                <a href="" class="a-none"><button type="button" class="list-group-item list-group-item-action">Radiologi</button></a>
                <a href="" class="a-none"><button type="button" class="list-group-item list-group-item-action">Ruang Operasi</button></a>
                <a href="" class="a-none"><button type="button" class="list-group-item list-group-item-action">Ruang Bersalin</button></a>
                <li class="navbar-nav nav-item dropdown list-group-item list-group-item-action">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ruang Rawat Inap
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ranap-vip">VIP</a></li>
                        <li><a class="dropdown-item" href="ranap-deluxe">Deluxe</a></li>
                        <li><a class="dropdown-item" href="ranap">Bangsal</a></li>
                    </ul>
                </li>
                <a href="ambulan" class="a-none"><button type="button" class="list-group-item list-group-item-action">Ambulan</button></a>
                    <a href="kantin" class="a-none"><button type="button" class="list-group-item list-group-item-action">Kantin</button></a>
                    <a href="mushola" class="a-none"><button type="button" class="list-group-item list-group-item-action">Mushola</button></a>
                    <a href="parkiran-dan-halaman-depan" class="a-none"><button type="button" class="list-group-item list-group-item-action">Halaman Parkir dan Taman</button>
                </a>
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
