<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_document');
    }

    public function upload(Request $request)
    {
        $document = new Document();

        $image = $request->file;

        $imagename = time().' . '.$image->getClientoriginalExtension();

        $request->file->move('documentimage',$imagename);

        $document->image=$imagename;

        $document->nom = $request->nom;

        $document->format = $request->format;

        $document->type = $request->type;

        $document->save();

        return redirect()->back()->with('message','Document ajouté avec succès');
    }

}
