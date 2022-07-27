@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$tag->name}}</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('admin.tags.index')}}" class="btn btn-primary">Visualizza tutti i posts</a>
            </div>
            <div>
                @if (count($tag->post) > 0)
                    <ul>
                        @foreach ($tag->post as $el)
                        <li>{{$el->title}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection