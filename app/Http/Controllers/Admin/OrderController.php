<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::orderBy('id','desc')->get();

        return view('admin.order.index',compact('orders'));
    }

    public function orderDetail(Order $order){
        return view('admin.order.detail',compact('order'));
    }

    
}
