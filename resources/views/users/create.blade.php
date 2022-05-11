@extends('layouts.app')

@section('title', 'Novo do Usuário')

@section('content')

<div class="container">
    <h1 class="mt-5">Novo Usuário</h1>

    <form action="#" method="POST">
        <input class="form-control mb-2" type="text" name="nome" placeholder="Nome">
        <input class="form-control mb-2" type="email" name="email" placeholder="E-mail">
        <input class="form-control mb-2" type="password" name="password" placeholder="Senha">
        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    </form>
</div>


@endsection

