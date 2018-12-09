@extends('layout.master')

@section('content')

<a class="btn btn-danger" href="{{route('cart.clear')}}">Kosár ürités</a>
<table class="table table-stripped">
    <thead> 
        <tr>
            <th>Név</th>
            <th>Egységár</th>
            <th class="text-center">Darabszám</th>
            <th class="text-center">Ár</th>
            <th class="text-center" >Törlés</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse (Cart::content() as $termek)
            <tr>
                <td>{{ $termek->name }}</td>
                <td>{{ $termek->price }} HUF</td>
                <td class="text-center" >{{ $termek->qty }}</td>
                <td class="text-center">{{ $termek->price * $termek->qty }} HUF</td>
             
             <td class="text-center" ><a  href="{{route('cart.sorclear','Cart::get($termek->rowId)')}}">x</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="5">A kosár üres!</td>
            </tr>
        @endforelse
        <tr>
            <td colspan="4">Összesen</td>
            <td class="text-right">{{Cart::total()}} HUF</td>
        </tr>
    </tbody>
</table>

<a class="btn btn-primary float-right " href="{{route('final')}}">Rendelés leadása </a>
@stop