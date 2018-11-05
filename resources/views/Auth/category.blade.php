@extends('layout.master')

@section('content')

   


        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategoria név</th>
     
    </tr>
        @foreach ($kat_nev as $users) 

<table class="table table-striped table-dark">
  
  <tbody>
    <tr>
      <th scope="row">{{$users->kat_id}}</th>
      <th>{{$users->kat_nev}}</th>
      
    </tr>
   
  </tbody>
</table>

       
    @endforeach
     


@stop

