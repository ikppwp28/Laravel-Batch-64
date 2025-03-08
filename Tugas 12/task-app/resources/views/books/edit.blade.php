@extends('layouts.master')
@section('title')
    Edit Book
@endsection

@section('content')
<form method= "POST", action="/books/{{$book->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf

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
        <label class="form-label">Title Book</label>
        <input type="text" class="form-control" name="title" value="{{$book->title}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Content Books</label>
        <textarea name="content" class="form-control" cols="30" rows="10">{{$book->content}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image Book</label>
        <input type="file" class="form-control" name="image">   
    </div>
    <div class="mb-3">
        <label class="form-label">Category Book</label>
        <select name="category_id" id="" class="form-control" >
            <option value="">--Choose Category--</option>
            @forelse ($category as $item)
                @if ($item->id === $book->category_id)
                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endif
            @empty
            <option value="">Tidak ada Category</option>
        @endforelse
    </select>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection