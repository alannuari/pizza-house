@extends('layouts.app')

@section('content')
<div class="mx-auto px-2" style="max-width: 600px">
    <div class="bg-white px-4 py-5 rounded">
        <h2 class="text-center mb-3 fw-bold">Create a New Pizza</h2>
        <form action="{{ route('pizza.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <span class="text-danger">{{ $error }}</span>
                    @endforeach
                @endif
            </div>
            <div class="mb-4">
                <label for="size" class="form-label">Choose Size</label>
                <select name="size" id="size" class="form-select">
                    <option value="Personal">Personal</option>
                    <option value="Reguler">Reguler</option>
                    <option value="Jumbo">Jumbo</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="base" class="form-label">Choose Crust</label>
                <select name="base" id="base" class="form-select">
                    <option value="Pan Pizza">Pan Pizza</option>
                    <option value="Cheesy Bites">Cheesy Bites</option>
                    <option value="Cheesy Crust">Cheesy Crust</option>
                    <option value="Stuffed Crust">Stuffed Crust</option>
                    <option value="Crown Crust">Crown Crust</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="toppings" class="form-label">Toppings</label>
                <select name="toppings" id="toppings" class="form-select">
                    <option value="Meat Lovers">Meat Lovers</option>
                    <option value="American Favorite">American Favorite</option>
                    <option value="Cheeseburger">Cheeseburger</option>
                    <option value="Super Supreme">Super Supreme</option>
                    <option value="Veggie Garden">Veggie Garden</option>
                    <option value="Tuna Melt">Tuna Melt</option>
                </select>
            </div>
            <button class="btn btn-secondary">Order Pizza</button>
        </form>
    </div>
</div>
@endsection