@extends('dashboard.navbar')
@section('dashboard')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<div class="page-title">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form action="{{ route('layanan.store') }}" method="post" enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <label for="deskripsi" class="form-label">Nama Layanan</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control @error('nama_layanan') is-invalid @enderror" name="nama_layanan" type="text" id="layanan" value="{{old('nama_layanan')}}">
                                        @error('nama_layanan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <label for="slug" class="form-label">Slug</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control @error('slug') is-invalid @enderror" name="slug" type="text" id="slug" value="{{old('slug')}}">
                                        @error('slug')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control @error('gambar') is-invalid @enderror" name="gambar" type="file" id="gambar" value="{{old('gambar')}}">
                                        @error('gambar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <textarea name="deskripsi" id="editor" cols="30" rows="10"></textarea>
                                        @error('deskripsi')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit"  class="btn btn-success mt-2"><i class="bi bi-cloud-arrow-up-fill fs-5 text-light"></i> Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<script>
    ClassicEditor
		.create( document.querySelector( '#editor' ), {
            ckfinder : {
                uploadUrl: "{{ route('ckeditor.upload', ['_token'=>csrf_token()])}}"
            }
        })
		.catch( error => {
			console.error( error );
		} );
</script>
<script src="{{asset('js/slug.js')}}"></script>
@endsection