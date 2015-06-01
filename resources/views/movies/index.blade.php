@extends('app')
 @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
              @foreach ($movies as $movie)
                    <h1><a href="/movies/{{$movie->id}}">{{$movie->name}}</a></h1>
                    <p width="60">{{ $movie->description}}</td>
                    <a href="/movies/{{$movie->id}}/edit">Edit</a>
                    {!! Form::open(array('route' => array('movies.destroy', $movie->id), 'method' => 'delete')) !!}
                    <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                    {!! Form::close() !!}
              @endforeach
              <br>
              <a href="/movies/create">New</a>
		</div>
	</div>
</div>
@endsection