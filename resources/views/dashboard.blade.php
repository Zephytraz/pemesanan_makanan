@extends('template.index')

@section('content')
    <h1>Halaman Dashboard</h1>
    {{auth()->user()}}
@endsection