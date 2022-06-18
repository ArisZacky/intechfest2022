@extends('layouts.app')

@section('container')
    <h2>{{ $judul }}</h2><br>
    @yield('content')
@endsection