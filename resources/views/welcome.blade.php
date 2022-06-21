@extends('Layouts.App')
@section('header-title')
<h1 style="position: relative; left: 100px;">¡Hola! Bienvenido a la Mejor Academia Atomic.</h1>
@endsection
@section('content')
<div class="card" style="width: 23rem; margin: auto">
    <img src="{{asset('img/bg-img/Avatar.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Jahir Alexander Celorio Malavé</h5>
      <p class="card-text">Será tu Instructor en Academic Atom la Cual Aprenderás las Tecnologías Boostrap, Teilwind, Angular, Laravel.</p>
      <a href="https://github.com/Adictos-Al-Codigo" target="_blank" class="btn btn-primary">Saber Más</a>
    </div>
  </div>
@endsection