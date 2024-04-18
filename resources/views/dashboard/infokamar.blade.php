@extends('dashboard.navbar')
@section('dashboard')
    {{-- @include('dashboard/form/forminfokamar') --}}
    <style>
        /* CSS untuk mengubah warna latar belakang baris tabel ganjil */
        .striped tbody tr:nth-of-type(even) {
            background-color: rgb(245, 251, 245);
            /* Ganti dengan warna yang diinginkan */
        }

        .edit:hover::after {
            content: "Edit";
            position: absolute;
            left: 80%;
            background-color: #000;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            font-size: 12px;
            margin-left: 10px;
        }

        .hapus:hover::after {
            content: "Hapus";
            position: absolute;
            background-color: #000;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            font-size: 12px;
            margin-left: 10px;
        }
    </style>

    <div class="page-title">

        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <table class="table striped">
                            <thead class="table-info">
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Kamar</th>
                                    <th scope="col" class="text-center">Jumlah TT</th>
                                    <th scope="col" class="text-center">Terisi</th>
                                    <th scope="col" class="text-center">Tersedia</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datakamar as $data)
                                    <tr>
                                        <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->Kamar }}</td>
                                        <td class="text-center">{{ $data->jumlahTT }} Bed </td>
                                        <td class="text-center">{{ $data->jumlahTerisi }} Bed </td>
                                        <td class="text-center">{{ $data->jumlahKosong }} Bed </td>
                                        <td class="text-center">
                                            <button class="btn btn-warning edit" data-bs-toggle="modal"
                                                data-bs-target="#update-{{ $data->id }}"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <form action="/kamar/{{ $data->id }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger hapus"
                                                    data-confirm-delete="true"><i
                                                        class="bi bi-trash3-fill fs-6 text-light"></button>
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


    @include('dashboard.form.forminfokamar')
    @include('dashboard.form.formupdateinfokamar')

    {{-- <script src="{{ asset('js/fileuploader.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </script>
@endsection
