<div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
    <div class="list-group">
        <button type="button" class="rounded-top btn-green-top" aria-current="true">
            <b>DAFTAR LAYANAN</b>
        </button>
        <a href="{{ url('poli-anak') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('poli-anak') ? 'active-green' : '' }}">Poliklinik
                Anak</button></a>
        <a href="{{ url('poli-penyakit-dalam') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('poli-penyakit-dalam') ? 'active-green' : '' }}">Poliklinik
                Penyakit Dalam</button></a>
        <a href="{{ url('poli-bedah') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('poli-bedah') ? 'active-green' : '' }}">Poliklinik
                Bedah Umum</button></a>
        <a href="{{ url('poli-kandungan') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('poli-kandungan') ? 'active-green' : '' }}">Poliklinik
                Kebidanan dan Kandungan</button></a>
        <a href="{{ url('poli-umum') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('poli-umum') ? 'active-green' : '' }}">Poliklinik
                Umum</button></a>
        <a href="{{ url('poli-gigi') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('poli-gigi') ? 'active-green' : '' }}">Poliklinik
                Gigi</button></a>
        <a href="{{ url('jadwal-dokter') }}" class="a-none"><button type="button"
                class="list-group-item list-group-item-action {{ Request::is('jadwal-dokter') ? 'active-green' : '' }}">Jadwal
                Dokter</button></a>
    </div>
</div>
