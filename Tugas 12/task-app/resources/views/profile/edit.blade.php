@extends('layouts.master')
@section('title')
    Edit Profil
@endsection

@section('content')
@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<form method= "POST", action="/profile/{{$profile->id}}">
    @csrf
    @method("PUT")

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
        <label class="form-label">Age</label>
        <input type="number" class="form-control" value="{{$profile->age}}" name="age">
    </div>
    <div class="mb-3">
        <label class="form-label">Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10">{{$profile->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection