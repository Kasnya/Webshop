@extends('layout.master')
@include('layout._sidebar')
    
@section('content')
 

     @auth
        <p>Üdvözöljük a webshopunkban!</p>
            @if($errors->any())
                  <div class="alert alert-info">{{$errors->first()}}</div>
            @endif
            @else
                  <p>Üdvözöllek a webshopunkban.</p>
                  <P>Kérlek <a  href="{{ route('login') }}">jelentkezz</a> be a vásárláshoz.</p>
                  <p>Ha még nem regisztráltál, akkor <a  href="signup">itt</a> megteheted.</p>
      @endauth
@stop
