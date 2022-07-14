@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">
                        @if (Auth::user()->roles === "ADMIN")
                            <a href="{{ route('pizza.index')}}" class="text-decoration-none bg-secondary text-white px-4 py-2 rounded">
                                View all Pizzas
                            </a>
                        @else
                            <a href="{{ route('pizza.create')}}" class="text-decoration-none bg-secondary text-white px-4 py-2 rounded">
                                Order a Pizza
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
