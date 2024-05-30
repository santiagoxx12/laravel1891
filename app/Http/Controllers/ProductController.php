<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

public function index(){

    $products = Product::orderBy('id','desc')->get();
      return view('product.listar',compact('products'));
}

    public function create(){

        return view('product.create');

    }

    public function store(Request $request){

        $producto =new Product();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->description=$request->description;
        $producto->cantidad=$request->cantidad;
        $producto->date_exp=$request->date_exp;
        $producto->save();
        
        return $producto; 

    }

}
