@extends('layout.master')
@include('layout._sidebar')
    
@section('content')

    <table class="table table-striped">
        <th>Név</th>
        <th class="text-center">Nettó ár</th>
        <th class="text-center">ÁFA</th>
        <th class="text-center">Bruttó ár</th>
        @auth<th class="text-center">Kosárba helyezés</th>@endauth
    @foreach ($products as $termek)
        <tr>
            <form>
                <td>{{ $termek->termek_nev }}</td>
                <!-- <td>@if($termek->kedvezmeny > 0) -{{ $termek->kedvezmeny }}% @endif</td> -->
                <td class="text-center">{{ $termek->netto_ar }} Ft</td>
                <td class="text-center">{{ $termek->afa_kulcs }}%</td>
                <td class="text-center">{{ round($termek->netto_ar * (1 + $termek->afa_kulcs / 100)) }} Ft</td>
                @auth
                <!-- <td>Mennyiség: <input type="number" min="1" max="{{ $termek->mennyiseg }}" value="1" name="mennyiseg_{{ $termek->id }}"/></td> -->              
                <td class="text-center"> <a class="btn btn-info" href="{{route('cart.addd',[$termek->id])}}">Kosárba</a></td>
                @endauth
            </form>
        </tr>            
    @endforeach
    
    </table>
  
   
@stop