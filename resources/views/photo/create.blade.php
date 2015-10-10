@extends('base')



@section('content')
	<h1>New Photo</h1>
    {!! Form::open(['route' => 'photo.store', 'files' => true]) !!}
    	@include('photo.partials.form')
    {!! Form::close() !!}
@endsection