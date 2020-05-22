<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
    }

    public function index()
    {
        $pizzas = Pizza::all();

        return view("pizzas.index", compact("pizzas"));
    }

    public function show($id) {
        $pizza = Pizza::findorFail($id);
        return view("pizzas.show", compact("pizza"));
    }

    public function create()
    {
        return view("pizzas.create");
    }

    public function store()
    {
        $pizza = new Pizza();

        $pizza->name = request("name");
        $pizza->type = request("type");
        $pizza->base = request("base");
        $pizza->toppings = request("toppings");

        $pizza->save();

        return redirect("/")->with("msg", "Thanks for your order");
    }

    public function destroy($id) {
        Pizza::destroy($id);

        return redirect("/pizzas");
    }
}
