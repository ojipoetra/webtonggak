@extends('dashboard.navbar')
@section('dashboard')
   <table class="table table-striped">
      <thead class="table-info">
         <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col">Nama Iklan</th>
            <th scope="col">Gambar</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($dataiklan as $data)
            <tr>
               <td scope="row" class="text-center">{{ $loop->iteration }}</td>
               <td>{{ $data->nama_iklan }}</td>
               <td><img src="{{ asset('storage/' . $data->gambar) }}" alt="gambar" width="100px"></td>
            </tr>
         @endforeach
      </tbody>
   </table>
@endsection
