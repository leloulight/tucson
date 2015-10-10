@extends('base')



@section('content')
	<h1>Photos</h1>
    @forelse($photos as $photo)
    	{!! Html::image(URL::to('file/'.$photo->file_name), 'a picture', ['width' => '100%']) !!}
    	<h3>{{ $photo->title }}</h3>
    @empty
    	<h3>No photos yet!</h3>
    @endforelse
@endsection