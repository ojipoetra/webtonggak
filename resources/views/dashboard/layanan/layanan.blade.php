@extends('dashboard.navbar')
@section('dashboard')
    <a href="{{ url('layanan/create') }}" class="btn btn-success mb-3"><i class="bi bi-cloud-plus-fill"></i> Tambah</a>
    <div class="row">
        @foreach ($Datalayanan as $layanan)
            <div class="col-md-6">
                <div class="card mb-3 rounded-2">
                    <a href="" class="row g-0 shadow-sm">
                        <img src="{{ asset('storage/' . $layanan->gambar) }}" class="img-fluid rounded-start" alt="layanan"
                            style="width: 6rem">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">{{ $layanan->nama_layanan }}</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
