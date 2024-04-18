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
                        {{-- @foreach ($layanan as $data)
                            <li><a class="dropdown-item" href="/layanan/{{$data->id}}">{{$data->nama_layanan}}</a></li>
                        @endforeach --}}
                        <li><a href="{{url('poli-anak')}}" class="dropdown-item {{ Request::is('poli-anak') ? 'active-green' : '' }}">POLI ANAK</a></li>
                        <li><a href="{{url('poli-kandungan')}}" class="dropdown-item {{ Request::is('poli-kandungan') ? 'active-green' : '' }}">POLI KANDUNGAN</a></li>
                        <li><a href="{{url('poli-bedah')}}" class="dropdown-item {{ Request::is('poli-bedah') ? 'active-green' : '' }}">POLI BEDAH UMUM</a></li>
                        <li><a href="{{url('poli-penyakit-dalam')}}" class="dropdown-item {{ Request::is('poli-penyakit-dalam') ? 'active-green' : '' }}">POLI PENYAKIT DALAM</a></li>
                        <li><a href="{{url('poli-gigi')}}" class="dropdown-item {{ Request::is('poli-gigi') ? 'active-green' : '' }}">POLI GIGI</a></li>
                        <li><a href="{{url('poli-umum')}}" class="dropdown-item {{ Request::is('poli-umum') ? 'active-green' : '' }}">POLI UMUM</a></li>
                        <li><a href="{{url('jadwal-dokter')}}" class="dropdown-item {{ Request::is('jadwal-dokter') ? 'active-green' : '' }}">JADWAL DOKTER</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fasilitas Penunjang
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('ugd') ? 'active-green' : '' }}" href="{{url('ugd')}}">UGD</a></li>
                        <li><a class="dropdown-item {{ Request::is('farmasi') ? 'active-green' : '' }}" href="{{url('farmasi')}}">Instalasi Farmasi</a></li>
                        <li><a class="dropdown-item {{ Request::is('lab') ? 'active-green' : '' }}" href="{{url('lab')}}">Laboratorium</a></li>
                        <li><a class="dropdown-item {{ Request::is('radiologi') ? 'active-green' : '' }}" href="{{url('radiologi')}}">Radiologi</a></li>
                        <li><a class="dropdown-item {{ Request::is('ruang-operasi') ? 'active-green' : '' }}" href="{{url('ruang-operasi')}}">Ruang Operasi</a></li>
                        <li><a class="dropdown-item {{ Request::is('ruang-bersalin') ? 'active-green' : '' }}" href="{{url('ruang-bersalin')}}">Ruang Bersalin</a></li>
                        <li><a class="dropdown-item {{ Request::is('ruang-ranap') ? 'active-green' : '' }}" href="{{url('ruang-ranap')}}">Ruang Rawat Inap</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item {{ Request::is('ambulan') ? 'active-green' : '' }}" href="ruangan/ambulan">Ambulan</a></li>
                        <li><a class="dropdown-item {{ Request::is('kantin') ? 'active-green' : '' }}" href="{{url('kantin')}}">Kantin</a></li>
                        <li><a class="dropdown-item {{ Request::is('musola') ? 'active-green' : '' }}" href="ruangan/mushola">Musholah</a></li>
                        <li><a class="dropdown-item {{ Request::is('parkir') ? 'active-green' : '' }}" href="ruangan/parkiran-dan-halaman-depan">Halaman Parkir dan Taman</a></li>
                    </ul>
                </li>
                <a class="nav-link px-3" aria-current="page" href="#">Karir <span class="badge bg-danger"></span></a>
                <a class="nav-link px-3" aria-current="page" href="#">Media Informasi</a>
                @auth
                    <a href="/dashboard"><button class="btn-green"><i class="bi bi-grid-fill"></i> DASHBOARD</button></a>
                @else
                    <a href="#"><button class="btn-green"><span class="badge text-bg-danger">Baru</span> DAFTAR ONLINE</button></a>
                @endauth
            </div>
        </div>
    </div>
</nav>