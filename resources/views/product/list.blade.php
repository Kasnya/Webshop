@extends('layout.master')
@include('layout._sidebar')
    
@section('content')

    <table class="table table-striped">
    @foreach ($products as $termek)
        <tr>
            <form>
                <td>{{ $termek->termek_nev }}</td>
                <td>@if($termek->kedvezmeny > 0) -{{ $termek->kedvezmeny }}% @endif</td>
                <td>Ár: {{ $termek->netto_ar * (1 - $termek->kedvezmeny / 100) * (1 + $termek->afa_kulcs / 100) }} Ft</td>
                @auth
                <td>Mennyiség: <input type="number" min="1" max="{{ $termek->mennyiseg }}" value="1" name="mennyiseg_{{ $termek->id }}"/></td>
              
                <td> <a class="btn btn-info" href="{{route('cart.addd',[$termek->id])}}">Kosárba</a></td>
                @endauth
            </form>
        </tr>            
    @endforeach
    
    </table>
  
   
@stop