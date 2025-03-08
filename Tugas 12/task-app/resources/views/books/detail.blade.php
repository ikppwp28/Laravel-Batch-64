@extends('layouts.master')

@section('title')
    Detail Buku
@endsection

@section('content')
    <h1 class="text-primary">{{$book->title}}</h1>
    <p class="mt-5">{{$book->content}}</p>
    <h1>List Comments</h1>
    @forelse ($book->Comment as $item)
        <div class="card my-3">
            <div class="card-header">
                {{ $item->owner->name }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $item->content }}</p>
            </div>
        </div>
    @empty
        <h3>No Comments</h3>
    @endforelse

    <hr>
    @auth
    <h3>Add Komentar</h3>
    <form method="POST" action="/comments/{{$book->id}}" enctype="multipart/form-data">
        @csrf

        {{-- Validation --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <textarea name="content" class="form-control" placeholder="Isi Komentar" id="" cols="" rows=""></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Comments</button>
    </form>
    @endauth

    <a href="/books" class="btn btn-secondary btn-sm my-3">Back</a>
@endsection