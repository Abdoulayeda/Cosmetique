<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('admin.produits.index')->with(compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
       return view('admin.produits.create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $produit = new Produit();

     $image = $request->file('photo');
     $nomimage = 'produit'.time().'.'.$image->getClientOriginalExtension();
     $path = $image->storeAs('imageproduits', $nomimage);

     $produit->titre = $request->titre;
     $produit->prix = $request->prix;
     $produit->prixpromo = $request->prixpromo;
     $produit->photo = $nomimage;
     $produit->description = $request->description;
     $produit->categories_id = $request->categorie;

     $produit->save();

     return redirect()->route('produit.index')->with('prodcreate', 'Produit enrégistré avec success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('admin.produits.edit')->with(compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
 $request->validate([
     'photo'=>'nullable'
 ]);

        $produit = Produit::find($id);
        $produit->titre = $request->titre;
        $produit->prix = $request->prix;
        $produit->prixpromo = $request->prixpromo;
        $produit->photo = $request->photo;
        $produit->promo = $request->promo;
        $produit->description = $request->description;

        $produit->save();

        return  redirect()->route('produit.index')->with('prodedit', 'Produit modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('produit.index')->with('proddelete', 'Produit supprimé avec suucess');
    }
}
