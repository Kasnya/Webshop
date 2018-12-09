@extends('layout.master')
@include('layout._sidebar')
    
@section('content')
 

     @auth
        <p> Üdvözöllek a webshopunkban </p>

      @else

       <p> Üdvözöllek a webshopunkban </p>
       <P>Kérlek <a  href="{{ route('login') }}">jelentkez</a> be a vásárlás hoz</p>
       <p> Ha még nem Regisztráltáll <a  href="signup">itt</a> meg teheted</p>

       @endauth
@stop
