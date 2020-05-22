@extends('layouts.app')

@section("content")
    <div class="wrapper create-pizza">
        <h1>Create a new Pizza</h1>
        <form action="{{route("pizzas.store")}}" method="post">
            @csrf
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose Pizza Type:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="vege supreme">Vege Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose base Type:</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheese crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin and crispy">Thin and crispy</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label>Extra Toppings</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                <input type="checkbox" name="toppings[]" value="olives">Olives <br>
            </fieldset>
            <input type="submit" value="Order pizza" name="submit" id="submit">
        </form>
    </div>
@endsection
