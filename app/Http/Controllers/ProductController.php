<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    function index(){
        $data=Product::all();
        return view('product',['product'=>$data]);
    }
    function detail($id){
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        if ($req->session()->has('user')){
           $cart= new Cart;
           $cart->user_id=$req->session()->has('user');
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else{
            return redirect(('/login'));
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
        
    
}
