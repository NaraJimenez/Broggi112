@extends('layouts.principal')

@section('contenido')
    {
    {{-- { $user->rol->nombre} --}}
    { $user->rol->nombre}
    }
@endsection
