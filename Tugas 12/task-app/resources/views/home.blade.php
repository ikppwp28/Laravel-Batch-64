@extends('layouts.master')

@section('title')
    SanberBook
@endsection

@section('content')
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
            <li>Mendaftar di <a href="{{ url('/form') }}"> Form Sign Up </a></li>
            <li>Selesai!</li>
        </ol>
    </article>
@endsection