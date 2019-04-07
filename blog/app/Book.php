<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['category_id','name', 'author','publisher','ISBN','barcode','keywords','description'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
