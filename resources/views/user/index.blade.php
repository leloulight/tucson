@extends('base')



@section('content')
	<h1>Users</h1>
    @forelse($users as $user)
    	<h3>{{ $user->username }}</h3>
    @empty
    	<h3>No users yet!</h3>
    @endforelse
@endsection