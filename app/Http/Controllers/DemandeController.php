<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    //
    public function index(){
        $id = Auth::id();
        $demande = Demande::where('user_id',$id)
                            ->get();
        return view('mesDemandes',compact('demande'));
    }
    public function store(){
        $demande = new Demande;
        
        $demande->type = request('type');       
        $demande->user_id = Auth::id();       
        $demande->save();
        return redirect('/mesDemandes');
    }
    public function update($id){
        $demande = Demande::find($id);
        $demande->nom = request('nom');
        $demande->prenom = request('prenom');
        $demande->type = request('type');
        $demande->email = request('email');
        $demande->numero = request('numero');
        $demande->update();
        return redirect('/mesDemandes');
    }
    public function delete($id){
        $demande = Demande::find($id);
        $demande->delete();
        return redirect('/mesDemandes');
    }
}
