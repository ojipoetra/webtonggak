@extends('dashboard.navbar')
@section('dashboard')
    <a href="{{ url('layanan/create') }}" class="btn btn-success mb-3"><i class="bi bi-cloud-plus-fill"></i> Tambah</a>
    <div class="row">

        @forelse ($Datalayanan as $layanan)
            <div class="col-md-6">
                <div class="card mb-3 rounded-2">
                    <a href="#" class="row g-0 shadow-sm">
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
        @empty
            <div class="card">
                <div class="card-body">
                    <div class="error-page container">
                        <div class="col-md-8 col-12 offset-md-2">
                            <div class="text-center">
                                <img class="img-error" src="icon/error-404.svg" alt="Not Found">
                                <h1 class="error-title">NOT FOUND</h1>
                                <p class='fs-5 text-gray-600'>The page you are looking not found.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforelse
@endsection
