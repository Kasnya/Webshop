@extends('layout.master')
@include('layout._sidebar')
    
@section('content')
 

     @auth
        <p> Üdvözöllek a webshopunkban </p>
        @if($errors->any())
        <div class="alert alert-info">{{$errors->first()}}</div>
@endif

      @else

       <p> Üdvözöllek a webshopunkban </p>
       <P>Kérlek <a  href="{{ route('login') }}">jelentkez</a> be a vásárlás hoz</p>
       <p> Ha még nem Regisztráltáll <a  href="signup">itt</a> meg teheted</p>

       @endauth
@stop
