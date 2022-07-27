@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Modifica: {{$category->title}}</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="name" value="{{old('name', $category->name)}}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
</div>
@endsection