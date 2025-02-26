@extends('layouts.master')

@section('title')
    Welcome
@endsection  

@section('content')
        <header>
            <h1>SELAMAT DATANG {{strtoupper($first)}} {{strtoupper($last)}}!!!</h1>
            <h2>Terimakasih telah bergabung di SanberBook. Social Media kita Bersama</h2>
            <p>Mohon dijaga solidaritas dan integritas bersama di Social Media Cinta Kita Bersama, Sanber Book</p>
        </header>
@endsection