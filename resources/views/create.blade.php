@extends('layouts.main')
@section('title', 'Agenda Telefônica')
@section('content')

<div class="py-3 text-center">
    <h2>Criar novo Usuário</h2>
</div>
<div class="col-md-12 text-center">
    <div class="col-md-2" style="margin-left: auto;">
        <button class=" btn btn-primary btn-lg"> <a href="/user" style="text-decoration:none;color: white;">Voltar</a></button>
    </div>
    <form class="needs-validation" method="POST">
        @csrf
        <hr class="my-4">
        <div class="row g-3" style="align-items: center;justify-content: center;">
            <div class="col-md-2">
                <label for="cc-expiration" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome" required="">
            </div>
            <div class="col-md-3">
                <label for="cc-cvv" class="form-label">Email </label>
                <input type="text" name="email" id="email" class="form-control"  placeholder="Email" required="">
            </div>
            <div class="col-md-2">
                <label for="cc-cvv" class="form-label">Telefone(1)</label>
                <input type="text" name="telephone" id="telephone" class="form-control"  placeholder="Telefone(1)">
            </div>
            <div class="col-md-2">
                <label for="cc-cvv" class="form-label">Telefone(2)</label>
                <input type="text" name="telephone1" id="telephone1" class="form-control"  placeholder="Telefone(2)">
            </div>
            <div class="col-md-2">
                <button class=" btn btn-success btn-lg">Criar</button>
            </div>
        </div>
        <hr class="my-4">
    </form>
</div>
@endsection