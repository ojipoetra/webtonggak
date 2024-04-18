@extends('menu.kerangka')
@section('content')
@foreach ($layanan as $item)    
<div class="card" style="width: 18rem;">
    <img src="{{$item->gambar}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">{!!$item->deskripsi!!}</p>
      <a href="/layanan/{{$item->id}}">Layanan</a>
    </div>
  </div>
@endforeach
@endsection