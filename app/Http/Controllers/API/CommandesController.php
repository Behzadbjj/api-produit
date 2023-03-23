<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Commande::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Code permettant de créer une commande
          $commande = new Commande();
          $commande->id_client = $request->id_client;
          $commande->id_produit = $request->id_produit;
          $commande->quantite = $request->quantite;
          $commande->date = $request->date;
          $commande->save();
          return response()->json($commande);
    }

    /**
     * Display the specified resource.
     */
    public function show($idClient)
    {
        return response()->json(Commande::where('id_client', $idClient)->with('produit')->get());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   function update(Request $request, Commande $commande)
    {

        $commande->update([

           "id_client" => $request->id_client,
           "id_produit" => $request->id_produit,
           "quantite" => $request->quantite,
           "date" => $request->date,
           
         ]);
     
         // On retourne la réponse JSON
         return response()->json();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        $commande->delete();

        // On retourne la réponse JSON
        return response()->json();
    }

}
