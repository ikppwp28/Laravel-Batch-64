@extends('layouts.master')
@section('title')
    Detail Genres
@endsection

@section('content')
<h1>{{$genre->name}}</h1>
<p>{{$genre->description}}</p>

<a href="/category", class="btn btn-primary btn-sm">Kembali</a>
@endsection