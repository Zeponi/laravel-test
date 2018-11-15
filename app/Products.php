<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable = ['name', 'description', 'image', 'price', 'status', 'category_id'];

    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
