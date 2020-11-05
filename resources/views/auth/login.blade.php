@extends('layouts.app')

@section('content')
<div class="container  flex-column text-center d-flex align-items-center justify-content-center " id="login-container">
    
    <div class="logo-container">
        <img class="mb-4" src="{{asset('img/logo.jpg')}}" alt="Eiffage Logo" > 
        <span class="logo-text text-sm-center">EIFFAGE SERVICES</span>
    </div>

    <form method="POST" action="{{ route('login') }}" class="form-signin">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal site-name">GREEN-PERF</h1>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Login">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Mot de passe">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <button class="btn btn-lg btn-danger btn-block" type="submit">Se connecter</button>
    </form>
</div>
@endsection