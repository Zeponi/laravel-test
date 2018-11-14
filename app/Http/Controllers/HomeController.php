<?php

namespace App\Http\Controllers;

use App\Products;
use App\Catergory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Products::all()->where('status', '=', 'A');
        //Pesquisando as categorias dos produtos
        foreach ($products as $product) {
            $product->category = $products->category();
        }

        return view('home', compact('products'));
    }
}
