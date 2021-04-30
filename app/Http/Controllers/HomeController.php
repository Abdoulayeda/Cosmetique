<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('index')->with(compact('produits'));
    }

    public function show($id)
    {
        $produit = Produit::find($id);
        return view('show')->with(compact('produit'));
    }
}

