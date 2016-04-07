<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $start = Input::get('categorie');
        $posts = DB::table('posts')
            ->where('id_etat', '=', 3)
            ->where('id_categorie', '=', $start)
            ->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $req_categories = DB::table('categories')->select('id', 'libelle_categorie')->get();
        $categories = array();
        foreach($req_categories as $categorie) {
            $categories[$categorie->id] = $categorie->libelle_categorie;
        }
        return view('posts.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Post::create($request->all());
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::where('posts.id', '=', $id)
            ->join('categories', 'categories.id', '=', 'posts.id_categorie')
            ->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
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
