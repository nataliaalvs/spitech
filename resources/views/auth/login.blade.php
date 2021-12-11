@extends('layouts.login-register')

@section('page-title')
    Login
@endsection

@section('form')
<form action="{{url('/login')}}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required/>
        <label for="inputEmail">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
        <label for="inputPassword">Senha</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
        <label class="form-check-label" for="inputRememberPassword">Lembrar senha</label>
    </div>
    <div class="d-flex align-items-center justify-content-between mt-4 mb-2">
        <a class="small" href="#">Esqueceu a senha?</a>
        <a class="btn btn-primary" href="#">Entrar</a>
    </div>

    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{url('/register')}}">Não tem uma conta? Cadastre-se!</a></div>
    </div>
</form>
@endsection