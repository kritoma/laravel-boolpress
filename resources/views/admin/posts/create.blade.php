@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Crea un nuovo post</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10">{{old('content')}}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input @error('published') is-invalid @enderror" id="published" name="published" {{old('published') ? 'checked' : ''}}>
                    <label class="form-check-label" for="published">Pubblica</label>
                    @error('published')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <p>Tag</p>
                    @foreach ($tags as $tag)
                        <input type="checkbox" class="form-check-input @error('{{$tag->id}}') is-invalid @enderror" id="{{$tag->id}}" name="tags[]" {{in_array($tag->id, old('tags',[])) ? 'checked' : ''}}>
                        <label class="form-check-label" for="{{$tag->id}}">{{$tag->name}}</label>
                        @error('tags')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    @endforeach
                    
                </div>
                <div class="form-group">
                    <label for="category_id">Example select</label>
                    <select class="form-control" id="category_id" name="category_id">
                        <option value="">Seleziona categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
</div>
@endsection