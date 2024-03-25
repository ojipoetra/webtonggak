@extends('dashboard.navbar')
@section('dashboard')
<div class="page-title">
    <!-- Basic File Browser start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form action="" method="post">
                                    <label for="formFile" class="form-label">File</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <label for="formFile" class="form-label">Deskripsi</label>
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <input class="form-control" type="text" id="formFile">
                                    </div>
                                    <button type="submit"  class="btn btn-success mt-2"><i class="bi bi-cloud-arrow-up-fill fs-5 text-light"></i> Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Basic File Browser end -->
</div>
{{-- <script src="{{ asset('js/fileuploader.js') }}"></script> --}}
@endsection