<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Products;

class SiteController extends Controller
{
    
	public function index() {

		$categorys = Category::all();

		return view('welcome', compact('categorys'));
	}

	public function product ($id) {
		$categorys = Category::all();
		$product = Products::find($id);

		return view('product', compact('product', 'categorys'));
	}

}
