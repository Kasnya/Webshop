@extends('layout.master')

@section('content')
    @auth
        Hello, {{ Auth::user()->firstname }}!
    @else
        Hello, vendég!
    @endauth

    
@stop
