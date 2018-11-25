@extends('layout.master')

@section('content')


    <div class="row">
        <div class="col-md-5 mx-auto">
            @foreach ($statuses as $status)
                @include('status._item')
            @endforeach
        </div>
    </div>
@stop