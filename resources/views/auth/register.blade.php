@extends('layouts.login-register')

@section('page-title')
    Cadastre-se
@endsection

@section('form')
<form method="POST" action="{{url('/register')}}">
    @csrf
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your first name" />
                <label for="inputFirstName">Nome</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input class="form-control" id="LastName" name="lastName" type="text" placeholder="Enter your last name" />
                <label for="inputLastName">Sobrenome</label>
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" />
        <label for="inputEmail">Email</label>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="password" name="password" type="password" placeholder="Create a password" />
                <label for="inputPassword">Senha</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" />
                <label for="inputPasswordConfirm">Confirme sua senha</label>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-2">
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Criar conta
        </button>
    </div>
</form>
<div class="card-footer text-center py-3">
    <div class="small"><a href="{{url('/login')}}">Já tem uma conta? Vá para login</a></div>
</div>
@endsection