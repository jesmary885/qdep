@extends('adminlte::page')
@section('content_header')

@stop

@section('content')
    @livewire('admin.usuarios-index') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop