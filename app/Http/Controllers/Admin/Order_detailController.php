<?php

namespace App\Http\Controllers\Admin;

use\App\Order_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Order_detailController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_details = Order_detail::all();
        return view('admin.order_details.index', compact('order_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_detail = new Order_detail;

        $order_detail->discount = $request->discount;
        $order_detail->order_id = $request->order_id;
        $order_detail->product_id = $request->product_id;
        $order_detail->price = $request->price;
        $order_detail->quatity = $request->quatity;
        $order_detail->subtotal = $request->subtotal;
      
        $order_detail->save();

        return redirect()->route('order_details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order_detail = Order_detail::where('id',$id)->first();
        return view('admin.order_details.show', compact('order_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_detail = Order_detail::where('id',$id)->first();
        return view('admin.order_details.edit', compact('order_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order_detail = Order_detail::where('id',$id)->first();

        $order_detail->discount = $request->discount;
        $order_detail->order_id = $request->order_id;
        $order_detail->product_id = $request->product_id;
        $order_detail->price = $request->price;
        $order_detail->quatity = $request->quatity;
        $order_detail->subtotal = $request->subtotal;
      
        $order_detail->save();

        return redirect()->route('order_details.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_detail = Order_detail::where('id',$id)->first();
        $order_detail->delete($order_detail);
        return redirect()->route('order_details.index');
    }
}
