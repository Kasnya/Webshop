


@extends('layout.master')

@section('content')

    <div class="login">
        <form method="post" action="{{ route('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Jelszó</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Bejelentkezés">
            </div>
        </form>
    </div>

@stop