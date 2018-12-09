@extends('layout.master')

@section('content')
<p>Szálítási adatok:</p>
<table class="table  ">
  <tr>
    <th>Vezetéknév</th>
    <td>{{ Auth::user()->vez_nev}} </td>
  </tr>
  <tr>
    <th>Keresztnév</th>
    <td>{{ Auth::user()->ker_nev}} </td>
  </tr>
  <tr>
    <th>Város</th>
    <td>{{Auth::user()->cimek->varos }}</td>
  </tr>
  <tr>
    <th>Utca</th>
    <td>{{Auth::user()->cimek->utca }}</td>
  </tr>
  <tr>
    <th>Házszám</th>
    <td>{{Auth::user()->cimek->hazszam }}</td>
  </tr>

  @if (Auth::user()->cimek->emelet!=NULL)
  <tr>
    <th>Emelet</th>
    <td>{{Auth::user()->cimek->emelet }}</td>
  </tr>
  
  @endif
  @if (Auth::user()->cimek->ajtoszam!=NULL)
  <tr>
    <th>Ajtó szám</th>
    <td>{{Auth::user()->cimek->ajtoszam }}</td>
  </tr>
  
  @endif
  
</table>


<br>
<table class="table table-stripped">
    <thead> 
        <tr>
        
            <th>Név</th>
            <th>Egység ár</th>
            <th class="text-center">Darabszám</th>
            <th class="text-right">Ár</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse (Cart::content() as $termek)
            <tr>
                <td>{{ $termek->name }}</td>
              
                <td>{{ $termek->price }} HUF</td>
                
                <td class="text-center">{{ $termek->qty }}</td>
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
<a class="btn btn-ok float-right" href="{{route('cart.finally')}}">Véglegesítés</a>
@stop
