@extends('dashboard.navbar')
@section('dashboard')
<div class="page-title">
    <!-- Basic File Browser start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form action="/fileupload/{{$fileupdate->id}}" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" type="text" id="deskripsi" value="{{old('deskripsi',$fileupdate->deskripsi)}}">
                                        @error('deskripsi')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <label for="name_file" class="form-label">File</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control" name="name_file" type="file" id="name_file">
                                    </div>
                                    <button type="submit"  class="btn btn-success mt-2"><i class="bi bi-cloud-arrow-up-fill fs-5 text-light"></i> Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<!-- Basic File Browser end -->
{{-- <script src="{{ asset('js/fileuploader.js') }}"></script> --}}
@endsection