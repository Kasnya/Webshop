
@extends('layout.master')

@section('content')

@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach

    <div class="register">
        <form method="post" action="{{ route('register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
               
            <div class="form-group">
                <label>Keresztnév</label>
                <input class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" type="text" name="firstname" value="{{ old('firstname') }}">
                @if ($errors->has('firstname'))
                    @foreach ($errors->get('firstname') as $error)
                        <p class="invalid-feedback">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label>Vezetéknév</label>
                <input class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" type="text" name="lastname" value="{{ old('lastname') }}">
                @if ($errors->has('lastname'))
                    @foreach ($errors->get('lastname') as $error)
                        <p class="invalid-feedback">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $error)
                        <p class="invalid-feedback">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label>Jelszó</label>
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password">
                @if ($errors->has('password'))
                    @foreach ($errors->get('password') as $error)
                        <p class="invalid-feedback">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label>Jelszó megerősítése</label>
                <input class="form-control" type="password" name="password_confirmation">
            </div>
            <hr>

            <div class="form-group">
                <label>Irányítószám</label>
                <input class="form-control" type="text" name="address[irszam]" value="{{ old('address[irszam]') }}">
            </div>

            <div class="form-group">
                <label>Város</label>
                <input class="form-control" type="text" name="address[varos]" value="{{ old('address[varos]') }}">
            </div>

            <div class="form-group">
                <label>Utca</label>
                <input class="form-control" type="text" name="address[utca]" value="{{ old('address[utca]') }}">
            </div>

            <div class="form-group">
                <label>Házszám</label>
                <input class="form-control" type="text" name="address[hazszam]" value="{{ old('address[hazszam]') }}">
            </div>

            <div class="form-group">
                <label>Emelet</label>
                <input class="form-control" type="text" name="address[emelet]" value="{{ old('address[emelet]') }}">
            </div>

            <div class="form-group">
                <label>Ajtó szám</label>
                <input class="form-control" type="text" name="address[ajtoszam]" value="{{ old('address[ajtoszam]') }}">
            </div>
            

            
            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Regisztrálás">
            </div>
        </form>
    </div>

@stop