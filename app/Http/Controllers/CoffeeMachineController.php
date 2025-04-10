<?php

namespace App\Http\Controllers;

use App\Models\CoffeeMachine;
use Illuminate\Http\Request;

class CoffeeMachineController extends Controller
{
    public function show()
    {
        $coffeeMachines = CoffeeMachine::all();
        return view('visualisation.coffee_machines', compact('coffeeMachines'));
    }

    public function index()
    {
        $coffeeMachines = CoffeeMachine::all();
        return view('gestion.coffee_machines', compact('coffeeMachines'));
    }

    public function updateProduct(Request $request, CoffeeMachine $coffeeMachine)
    {
        $request->validate([
            'product' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0'
        ]);

        $products = $coffeeMachine->products;
        $products[$request->product]['quantity'] = $request->quantity;
        $products[$request->product]['price'] = $request->price;
        
        $coffeeMachine->products = $products;
        $coffeeMachine->save();

        return redirect()->back()->with('success', 'Produit mis à jour avec succès.');
    }

    public function toggle(CoffeeMachine $coffeeMachine)
    {
        $coffeeMachine->is_on = !$coffeeMachine->is_on;
        $coffeeMachine->save();

        return redirect()->back()->with('success', 'État de la machine modifié avec succès.');
    }
} 