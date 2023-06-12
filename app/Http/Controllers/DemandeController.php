<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Document;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    //
    public function index(){
        $demande = Demande::all();
        return view('mesDemande',compact('demande'));
    }
    public function store(){
        $demande = new Demande;
        $demande->nom = request('nom');
        $demande->prenom = request('prenom');
        $demande->type = request('type');
        $demande->email = request('email');
        $demande->numero = request('numero');
        $demande->save();
        return redirect('/mesDocument');
    }
    public function update($id){
        $demande = Demande::find($id);
        $demande->nom = request('nom');
        $demande->prenom = request('prenom');
        $demande->type = request('type');
        $demande->email = request('email');
        $demande->numero = request('numero');
        $demande->update();
        return redirect('/mesDocument');
    }
    public function delete($id){
        $demande = Demande::find($id);
        $demande->delete();
        return redirect('/mesDocument');
    }
}
