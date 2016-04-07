<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id_etat', 'id_sous_categorie'];
    
}
