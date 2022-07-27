@extends('layouts.app')

@section('content')
    <div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">tag</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{$tag->id}}</th>
                    <td>{{$tag->name}}</td>
                    <td>{{$tag->slug}}</td>
                    <td>
                        <a href="{{route('admin.tags.show', $tag->id)}}" class="btn btn-primary">Visualizza</a>
                        <a href="{{route('admin.tags.edit', $tag->id)}}" class="btn btn-warning">Modifica</a>
                        <form action="{{route('admin.tags.destroy', $tag->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
        
@endsection