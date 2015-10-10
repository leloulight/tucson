@extends('base')



@section('content')
	<h1>New User</h1>
    {!! Form::open(['route' => 'user.store']) !!}
    	@include('user.partials.form')
    {!! Form::close() !!}
@endsection