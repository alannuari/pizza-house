@extends('layouts.app')

@section('content')
<div class="mx-auto bg-light px-4 py-5 rounded" style="max-width: 600px">
    <h2 class="fw-bold mb-3 text-center">Order for {{ $pizza->name }}</h2>
    <div class="px-4 py-2 bg-white shadow-sm rounded">
        <p class="fs-4 mb-1">Size - {{ $pizza->size }}</p>
        <p class="fs-4 mb-1">Base - {{ $pizza->base }}</p>
        <p class="fs-4 mb-1">Toppings - {{ $pizza->toppings }}</p>
    </div>
    <div class="py-4">
        <form action="{{ route('pizza.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-secondary">Complete Order</button>
        </form>
    </div>
    <div class="text-center">
        <a href="{{ route('pizza.index') }}" class="text-dark fs-5">Back to all pizzas</a>
    </div>
</div>
@endsection