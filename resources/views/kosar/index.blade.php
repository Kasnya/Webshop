@extends('layout.master')

@section('content')

<a class="btn btn-danger" href="{{route('cart.clear')}}">Kosár ürités</a>
<table class="table table-stripped">
    <thead> 
        <tr>
            <th>Név</th>
            <th>Egység ár</th>
            <th>Darabszám</th>
            <th>Ár</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse (Cart::content() as $termek)
            <tr>
                <td>{{ $termek->name }}</td>
                <td>{{ $termek->price }} HUF</td>
                <td>{{ $termek->qty }}</td>
                <td class="text-right">{{ $termek->price * $termek->qty }} HUF</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">A kosár tartalam üres</td>
            </tr>
        @endforelse
        <tr>
            <td colspan="3">Összesen</td>
            <td class="text-right">{{Cart::total()}} HUF</td>
        </tr>
    </tbody>
</table>
@stop