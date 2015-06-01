@extends('app')
 @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
             
                  
                    <h1 width="500">{{ $movie->name }}</h1><br>
                    <p width="60">{{ $movie->description}}</td><br>
                    <h3>Reviews:</h3><br>
                    @foreach ($movie->reviews as $review)
					<p>{{$review->content}}</p>
					<br>
					@endforeach	

					@if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                		@endif

                    {!! Form::open(['url'=>'reviews']) !!}
					<br>
					<div class="form-group">
					{!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder'=>'Review'])!!}
					{!! Form::hidden('movie_id', $movie->id) !!}
					</div>
					{!! Form::submit('Save') !!}
					<br><br>
					
					{!! Form::close() !!}
              
             
              <br>
              <a href="/movies">Back</a>
		</div>
	</div>
</div>
@endsection