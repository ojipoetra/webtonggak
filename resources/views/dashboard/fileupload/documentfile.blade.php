@extends('dashboard.navbar')
@section('dashboard')
    <div class="page-title">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="">
                            <table class="table">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Nama File</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documen as $file)
                                        <tr>
                                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                            <td>{{ $file->deskripsi }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('storage/' . $file->name_file) }}"
                                                    class="btn btn-primary"><i class="bi bi-arrow-down-circle-fill"></i></a>
                                                <a href="fileupload/{{ $file->id }}/edit" class="btn btn-warning"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <form action="/fileupload/{{ $file->id }}" method="post"
                                                    class="d-inline" data-id="{{ $file->id }}"
                                                    data-confirm-delete="true">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger delete"
                                                        onclick="confirm()"><i
                                                            class="bi bi-trash3-fill fs-6 text-light"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/fileuploader.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script>
    $('.delete').click(function(){
        let file = $(this).attr('data-id');
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/fileupload/"+file;
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
            }
        });
    }); --}}

    </script>
@endsection
