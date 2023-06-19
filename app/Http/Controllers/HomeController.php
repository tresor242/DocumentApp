<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) 
        {
            //vérifie si un utilisateur est actuellement authentifié dans l'application Laravel
            if (Auth::user()->usertype == '0') {
                 $document = Document::all();
            return view('user.home', compact('document'));
            }
            else {
                return view('admin.home');
            }
        }
        else {
            return redirect()->back();
        }
    }

    public function index(){
    if (Auth::id()) 
        {
            return redirect('home');
        }
        else
        {
             $document = Document::all();
             return view('user.home', compact('document'));
        }
    }
}
