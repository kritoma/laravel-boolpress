@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        @if ($post->image) {
            <div class="mb-3">
                <img src="{{asset("storage/$post->image")}}" alt="">
            </div>
        }
            
        @endif
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Visualizza tutti i posts</a>
            </div>
            <div>
                {{$post->content}}
            </div>
        </div>
    </div>
</div>
@endsection