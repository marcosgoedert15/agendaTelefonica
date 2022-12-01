@extends('layouts.main')
@section('title', 'Agenda Telefônica')
@section('content')

@if (session('msg'))
    <div class="alert alert-success" role="alert" style="text-align:center">
        {{session('msg')}}
    </div>
@endif


<div class="py-3 text-center">
    <h2>Agenda Telefônica</h2>
</div>


<div class="col-md-12 text-center">
    <div class="col-md-2" style="margin-left: auto;">
        <button class=" btn btn-success btn-lg"> <a href="/create" style="text-decoration:none;color: white;">Criar</a></button>
    </div>
    @foreach ($users as $user)
        <hr class="my-4">
        <div class="row g-3" style="align-items: center;justify-content: center;">
            <div class="col-md-2">
                <label for="cc-expiration" class="form-label">Nome </label>
                <input type="text" value="{{$user->name}}" name="name" id="name" class="form-control" disabled>
            </div>
            <div class="col-md-3">
                <label for="cc-cvv" class="form-label">Email </label>
                <input type="text" value="{{$user->email}}" name="email" id="email" class="form-control" disabled>
            </div>
            <div class="col-md-2">
                <label for="cc-cvv" class="form-label">Telefone(1)</label>
                <input type="text" value="{{$user->telephone}}" name="telephone" id="telephone" class="form-control" disabled>
            </div>
            <div class="col-md-2">
                <label for="cc-cvv" class="form-label">Telefone(2)</label>
                <input type="text" value="{{$user->telephone1}}" name="telephone1" id="telephone1" class="form-control" disabled>
            </div>
            <div class="col-md-1">
                <button class=" btn btn-warning btn-lg"> <a style="text-decoration:none;color: white;" href="/edit/{{$user->id}}">Alterar</a></button>
            </div>
            <div class="col-md-1">
                <form action="/user/{{$user->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class=" btn btn-danger btn-lg">Excluir</button>
                </form>
            </div>
        </div>
    @endforeach
    <hr class="my-4">
</div>
@endsection
