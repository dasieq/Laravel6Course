<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Pizza; 

class PizzaController extends Controller
{

  public function index() {
    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type','hawaiian')->get();
    $pizzas=Pizza::latest()->get();

    return view('pizzas', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    return view('details', ['id' => $id]);
  }

}