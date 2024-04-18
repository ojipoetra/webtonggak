<div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
    <div class="list-group">
        <button type="button" class="rounded-top btn-green-top" aria-current="true">
            <b>DAFTAR FASILITAS</b>
        </button>
        <a href="{{url('ugd')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('ugd') ? 'active-green' : '' }}">UGD</button></a>
        <a href="{{url('farmasi')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('farmasi') ? 'active-green' : '' }}">Instalasi Farmasi</button></a>
        <a href="{{url('lab')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('lab') ? 'active-green' : '' }}">Laboratorium</button></a>
        <a href="{{url('radiologi')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('radiologi') ? 'active-green' : '' }}">Radiologi</button></a>
        <a href="{{url('ruang-operasi')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('ruang-operasi') ? 'active-green' : '' }}">Ruang Operasi</button></a>
        <a href="{{url('ruang-bersalin')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('ruang-bersalin') ? 'active-green' : '' }}">Ruang Bersalin</button></a>
        <li class="navbar-nav nav-item dropdown list-group-item list-group-item-action">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ruang Rawat Inap
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item {{ Request::is('vip') ? 'active-green' : '' }}" href="{{url('vip')}}">VIP</a></li>
                <li><a class="dropdown-item {{ Request::is('deluxe') ? 'active-green' : '' }}" href="{{url('deluxe')}}">Deluxe</a></li>
                <li><a class="dropdown-item {{ Request::is('bangsal') ? 'active-green' : '' }}" href="{{url('bangsal')}}">Bangsal</a></li>
            </ul>
        </li>
            <a href="{{url('ambulan')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('ambulan') ? 'active-green' : '' }}">Ambulan</button></a>
            <a href="{{url('kantin')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('kantin') ? 'active-green' : '' }}">Kantin</button></a>
            <a href="{{url('mushola')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('musola') ? 'active-green' : '' }}">Mushola</button></a>
            <a href="{{url('parkir')}}" class="a-none"><button type="button" class="list-group-item list-group-item-action {{ Request::is('parkir') ? 'active-green' : '' }}">Halaman Parkir dan Taman</button></a>
    </div>
</div>