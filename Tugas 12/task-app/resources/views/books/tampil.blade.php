@extends('layouts.master')
@section('title')
    List Book
@endsection

@section('content')

@auth
@if (Auth()->user()->role === 'admin')
<a href="/books/create" class="btn btn-sm btn-primary my-3">Tambah</a>
@endif
@endauth

<div class="row">
    @forelse ($book as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('image/' . $item->image) }}" height="500px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <span class="badge bg-success">{{ $item->category->name }}</span>
                    <p class="card-text">{{ Str::limit($item->content, 200) }}</p>
                    <div claa="d-grip gap-2">
                        <a href="/books/{{ $item->id }}" class="btn btn-info w-100">Read More</a>
                    </div>
                    @auth
                    @if (Auth()->user()->role === 'admin')
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="/books/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                        <div class="col">
                            <form action="/books/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE') 
                                <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    @empty
        <h1>Tidak ada Buku</h1>
    @endforelse
</div>

@endsection