<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $promos = Produit::select('*')->where('ispromo','=','1')->get();
        $produits = Produit::select('*')->where('ispromo','=','0')->get();
        return view('index')->with(compact('produits', 'promos','categories'));
    }

    public function show($id)
    {
        $produit = Produit::find($id);
        return view('show')->with(compact('produit'));
    }

    public function promo()
    {
        $produits = Produit::all()->where('ispromo'==1)->get();
        return view('promo')->with(compact('produits'));
    }
}

