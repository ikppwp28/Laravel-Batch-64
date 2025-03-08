@extends('layouts.master')
@section('title')
    Detail Category Book
@endsection

@section('content')
<h1>{{$category->name}}</h1>
<p>{{$category->description}}</p>

<hr>

<div class="row">
    @forelse ($category->Books as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('image/' . $item->image) }}" class="card-img-top" height="">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{Str::limit($item->content, 100)}}</p>
                    <div class="d-grid gap-2">
                        <a href="/post/{{ $item->id }}" class="btn btn-info">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @empty
    <h1>Tidak Ada Postingan di Category Ini</h1>
    @endforelse
</div>

<a href="/category", class="btn btn-primary btn-sm my-3">Kembali</a>
@endsection