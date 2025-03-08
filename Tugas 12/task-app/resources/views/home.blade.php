@extends('layouts.master')

@section('title')
    SanberBook
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
    <article>
        <h3>Benefit Join di SanberBook</h3>
        <ul>
            <li>Mendapatkan motivasi dari sesama developer</li>
            <li>Sharing Knowledge dari para mastah Sanber</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>
    </article>

    <article>
        <h3>Cara Bergabung ke SanberBook</h3>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>Mendaftar di <a href="/register"> Form Sign Up </a></li>
            <li>Selesai!</li>
        </ol>
    </article>
@endsection