<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;
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

        return view('home', compact('products'));
    }

    public function add() {
        $categorys = Category::all();

        return view('add', compact('categorys'));
    }

    public function edit($id) {
        $categorys = Category::all();

        $product = Products::find($id);
        $category = Category::find($product->category_id);
        $product->category = $category->name;

        return view('edit', compact('product', 'categorys'));
    }

    public function save(Request $request) {
        $data = $request->all();

        $product = new Products();
        $product->name = $data['name'];
        $product->category_id = $data['category'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/products/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $product->image = $diretorio.$nomeArquivo;
        }
        $product->save();

        return redirect()->route('home');
    }

    public function remove($id) {

        $product = Products::find($id);
        $product->status = 'E';
        $product->update();

        return redirect()->route('home');
    }

}
