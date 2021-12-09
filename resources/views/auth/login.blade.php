@extends('layouts.login-register')

@section('page-title')
    Login
@endsection

@section('form')
<form action="{{route('dashboard')}}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
        <label for="inputEmail">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
        <label for="inputPassword">Password</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
    </div>
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <a class="small" href="password.html">Forgot Password?</a>
        <a class="btn btn-primary" href="{{route('dashboard')}}">Entrar</a>
    </div>

    <div class="card-footer text-center py-3">
        <div class="small"><a href="#">Need an account? Sign up!</a></div>
    </div>
</form>
@endsection