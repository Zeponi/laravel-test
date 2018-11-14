<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function category() {
        return $this->hasMany('App\Category', 'category_id');
    }
}
