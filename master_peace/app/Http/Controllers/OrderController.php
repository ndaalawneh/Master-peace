<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\cart;
use App\Models\user;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = order::join('users', 'users.id', '=', 'orders.user_id')->select('orders.*', 'users.name as user_name');

        // $orders=order::table('orders')
        // // ->select('orders.*','profiles.photo', 'profiles.one_by_one')
        // ->join('orders','users.id','=','orders.user_id')
        // ->where(['something' => 'something', 'otherThing' => 'otherThing'])
        // ->get();
 
        // dd($orders);
        $orders=order::all();
        return view( 'dashbord.order.order' , compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        $carts=cart::where('order_id',$order->id)->get();
        $user = user:: where("id" , $order->user_id)->get()->first();
        // dd($user);
        return view('dashbord.order.view' , compact('carts' , 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderRequest  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
