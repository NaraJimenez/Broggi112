@extends('layout.plantilla')
@section('title')
  Home
@endsection
@section('css-pagina')
<link  href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
	<div class="mobile"> 
    <div class="screen">
        <span>{{ $phone }}</span>
      <div class="bottom-bar">
          <div class="button-rounded red">
            <i class="fa-solid fa-phone fa-beat-fade"></i>
          </div>
      </div>
    </div>
  </div>
@endsection
