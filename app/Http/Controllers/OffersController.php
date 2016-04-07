<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OffersController extends Controller
{
    public function index()
    {
        $req_categories = DB::table('categories')->select('id', 'libelle_categorie')->get();
        $categories = array();
        foreach($req_categories as $categorie) {
            $categories[$categorie->id] = $categorie->libelle_categorie;
        }
        return view('offer.offer', compact('categories'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return view('offer.grateful');
    }
}
