<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

use Session; 

class CartController extends Controller
{
    public function add(Request $request){
        if(Session::has('cart')){
            $cart =  [
                'product_id' => $request->product_id,
                'product_name' => $request->product_name,
                'quantity' => $request->quantity,
                'price' => $request->product_price * $request->quantity,
            ]; 
            Session::put('cart', $cart);
            dd(Session::get('cart'));
            return redirect()->back();
        }else{
            $carts = Session::get('cart');
            
            $carts[]=
            [
                'product_id' => $request->product_id,
                'product_name' => $request->product_name,
                'quantity' => $request->quantity,
                'price' => $request->product_price * $request->quantity,
            ];
            
            Session::put('cart', $carts);
            dd('work');
        }
        //Session::forget('cart');
       
        // $request->session()->forget('cart');
        // $request->Session()::flush();
        
        return redirect()->back();
    }
    public function edit(Request $request ,  $id){
        $carts = Session::get('cart');
        foreach($carts as $cart){
            if($cart['product_id'] == $id){
                $cart['quantity'] = $request->quantity;
                $cart['quantity'] = $request->quantity;
            }
            
        } 
    }
    public function delete(){
    
        Session::forget('cart');

    }
}
