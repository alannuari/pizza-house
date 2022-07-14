@extends('layouts.app')

@section('content')
<div class="mx-auto px-2" style="max-width: 600px">
    <div class="bg-white px-4 py-5 rounded">
        <h2 class="text-center mb-4 fw-bold">Pizza Orders</h2>
        @if(count($pizzas))
            @foreach($pizzas as $pizza)
                <h4 class="bg-secondary px-4 py-2 rounded mb-3">
                    <a href="{{ route('pizza.show', $pizza->id) }}" class="text-decoration-none text-white">{{ $pizza->name }}</a>
                </h4>
            @endforeach
        @else
            <div class="text-center fs-5 pt-4">
                <p>Data is empty</p>
            </div>
        @endif
    </div>
</div>
@endsection