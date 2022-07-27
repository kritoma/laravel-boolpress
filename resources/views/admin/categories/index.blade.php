@extends('layouts.app')

@section('content')
    <div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="{{route('admin.categories.show', $category->id)}}" class="btn btn-primary">Visualizza</a>
                        <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning">Modifica</a>
                        <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
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