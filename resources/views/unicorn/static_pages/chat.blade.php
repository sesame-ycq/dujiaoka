@extends('unicorn.layouts.default')
@section('content')
    <section class="main-container">
        <iframe class="chat-iframe" src="{{$chatUrl}}" allowfullscreen></iframe>
    </section>
@stop
@section('js')
@stop
