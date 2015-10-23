@extends('base')



@section('content')

<div class="ui fixed inverted orange menu">
    <div class="ui container">
        <div href="#" class="header item">
            <img class="logo" src="{!! asset('semantic/images/logo.png') !!}">
            Tucson
        </div>
        <a href="#" class="item">Admort Slaughter</a>
        <a href="#" class="item">Salir</a>
    </div>
</div>

<div class="ui main container">
    <div class="ui grid">
        <div class="three wide column">
        </div>
        <div class="ten wide column">
            <div class="ui one cards">
                @foreach($photos as $photo)
                <div class="card">
                    <a class="image" href="{!! URL::route('photo.show', $photo->id) !!}">
                        {!! Html::image(URL::to('file/'.$photo->file_name), 'a picture') !!}
                    </a>
                    <div class="extra content">
                        <div class="left floated author">
                            <img src="http://lorempixel.com/80/80/cats/" class="ui avatar image">
                            {{ $photo->user->username }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="ten wide column">
        </div>
    </div>
</div>

<div class="ui inverted vertical footer red segment">
    <div class="ui center aligned container">
        <div class="ui horizontal inverted small divided link list">
            <a class="item" href="#">Tucson</a>
            <a class="item" href="#">Contacto</a>
            <a class="item" href="#">Terminos y condicionas</a>
            <a class="item" href="#">Políticas de privacidad</a>
        </div>
    </div>
</div>

@endsection