@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra Toppings :</p>
    @if($pizza->toppings)
        <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
        </ul>
    @endif
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Ordre</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection