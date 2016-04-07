<?php

namespace App\Http\Controllers\Admin;

use App\AdminPost;
use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = AdminPost::get();
        return view('posts.admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $req_categories = DB::table('categories')->select('id', 'libelle_categorie')->get();
        $req_sous_categories = DB::table('sous_categories')->select('id', 'libelle_sous_categorie')->get();
        $categories = array();
        $sous_categories = array();
        foreach($req_categories as $categorie) {
            $categories[$categorie->id] = $categorie->libelle_categorie;
        }
        foreach($req_sous_categories as $categorie) {
            $sous_categories[$categorie->id] = $categorie->libelle_sous_categorie;
        }
        return view('posts.admin.create', compact('categories', 'sous_categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Post::create($request->all());
        $posts = AdminPost::get();
        return view('posts.admin.index', compact('posts'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = AdminPost::findOrFail($id);
        return view('posts.admin.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $req_etats = DB::table('etats')->select('id', 'libelle_etat')->get();
        $etats = array();
        foreach($req_etats as $etat) {
            $etats[$etat->id] = $etat->libelle_etat;
        }
        $req_categories = DB::table('categories')->select('id', 'libelle_categorie')->get();
        $req_sous_categories = DB::table('sous_categories')->select('id', 'libelle_sous_categorie')->get();
        $categories = array();
        $sous_categories = array();
        foreach($req_categories as $categorie) {
            $categories[$categorie->id] = $categorie->libelle_categorie;
        }
        foreach($req_sous_categories as $categorie) {
            $sous_categories[$categorie->id] = $categorie->libelle_sous_categorie;
        }

        $post = AdminPost::findOrFail($id);

        return view('posts.admin.edit', compact('post', 'etats', 'categories', 'sous_categories'));
    }

    /**
     * Show the form for validate the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function valid()
    {
        $posts = DB::table('posts')->get();
        return view('posts.admin.index', compact('posts'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     *
     */
    public function update(Request $request, $id)
    {
        $post = AdminPost::findOrFail($id);
        $post->update($request->all());
        return redirect(route('admin.posts.edit', $id));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}