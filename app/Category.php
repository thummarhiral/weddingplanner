<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    /**
     * The attributes that are
      mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','description','status'
    ];

}