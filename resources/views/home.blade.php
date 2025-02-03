@extends('layouts.app')

@section('titulo')
    Pagina Prinicpal
@endsection

@section('contenido')
    <x-listar-post :posts="$posts" />
@endsection