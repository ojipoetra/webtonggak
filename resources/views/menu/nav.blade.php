 <!-- Section nav -->
 <section id="contact-nav">
    <div class="container bg-green py-2 rounded-bottom shadow-sm">
    </div>
</section>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg margin-center py-3 sticky-top shadow bg-light">
    <div class="container-fluid">
        <img src="assets/logo.png" alt="tonggakhusada" class="logo-size px-3">
        <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list line-green fs-1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link px-3 active-green" aria-current="page" href="/">Beranda</a>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#latarbelakang">Latar Belakang</a></li>
                        <li><a class="dropdown-item" href="#sambutan">Sambutan</a></li>
                        <li><a class="dropdown-item" href="#asuransi">Rekanan Asuransi</a></li>
                        <li><a class="dropdown-item" href="#lokasi">Lokasi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Kami
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($layanan as $data)
                            <li><a class="dropdown-item" href="{{route('layanan.viewpoli', $data->slug)}}">{{$data->nama_layanan}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fasilitas Penunjang
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ugd">UGD</a></li>
                        <li><a class="dropdown-item" href="farmasi">Instalasi Farmasi</a></li>
                        <li><a class="dropdown-item" href="">Laboratorium</a></li>
                        <li><a class="dropdown-item" href="">Radiologi</a></li>
                        <li><a class="dropdown-item" href="">Ruang Operasi</a></li>
                        <li><a class="dropdown-item" href="">Ruang Bersalin</a></li>
                        <li><a class="dropdown-item" href="">Ruang Rawat Inap</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="ruangan/ambulan">Ambulan</a></li>
                        <li><a class="dropdown-item" href="ruangan/kantin">Kantin</a></li>
                        <li><a class="dropdown-item" href="ruangan/mushola">Musholah</a></li>
                        <li><a class="dropdown-item" href="ruangan/parkiran-dan-halaman-depan">Halaman Parkir dan Taman</a></li>
                    </ul>
                </li>
                <a class="nav-link px-3" aria-current="page" href="karir">Karir <span class="badge bg-danger"></span></a>
                <a class="nav-link px-3" aria-current="page" href="media-informasi/">Media Informasi</a>
                @auth
                    <a href="/dashboard"><button class="btn-green"><i class="bi bi-grid-fill"></i> DASHBOARD</button></a>
                @else
                    <a href="#"><button class="btn-green"><span class="badge text-bg-danger">Baru</span> DAFTAR ONLINE</button></a>
                @endauth
            </div>
        </div>
    </div>
</nav>