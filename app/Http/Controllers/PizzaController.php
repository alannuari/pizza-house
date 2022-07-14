<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaRequest;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizza.index', compact('pizzas'));
    }

    public function create()
    {
        return view('pizza.create');
    }

    public function store(PizzaRequest $request)
    {
        $data = $request->all();
        Pizza::create($data); 
        return redirect()->route('home');
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizza.show', compact('pizza'));
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect()->route('pizza.index');
    }
}
