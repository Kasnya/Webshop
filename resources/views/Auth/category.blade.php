@extends('layout.master')

@section('content')

   

<div class="row">
        <div class="col-md-5 mx-auto">
        @foreach ($kat_nev as $users) 
       
        print $kat_nev,
        
    @endforeach
        </div>
    </div>


@stop