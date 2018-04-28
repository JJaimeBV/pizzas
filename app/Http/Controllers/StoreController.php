<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use \Session;

class StoreController extends Controller
{

    public function index(){
      //Aqui se forma la pantalla principal y se le manda la lista de solo 20 productos
      try{
        $products = Product::paginate(20);
        //$products = Product::all(); //si se quieren enviar todos
      }catch(\Exception $e){
        $products = array();
      }
      return view('store.index',compact('products'));
    }

    public function show($slug){
      //Aqui se forma el detalle de producto
      try{
        $product = Product::where('slug', $slug)->first();
        return view('store.product_detail',compact('product'));
      }catch(\Exception $e){
        $product = array();
        return view('store.product_detail',compact('product'));
      }
      
    }

    public function contacto(){
      return view('store.contacto');
    }
}
