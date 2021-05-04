@extends('layouts.front')

@section('title','Главная')

@section('content')

<section class="jumbotron text-center">
<div class="container">
  <h1>ТОО Склад информационных технологий</h1>
  <p class="lead text-muted">Разработать функционал по формированию графика выполнения работ.</p>
  <p>
    <a href="{{url('/chart')}}" class="btn btn-primary my-2">График выполнения работ</a>
  </p>
</div>
</section>

@endsection