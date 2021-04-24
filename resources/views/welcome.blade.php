
@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            Herzlich Wilkommen!!!
        </div>
        <p class="mssg">{{session('mssg')}}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection
