<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\orders;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index')->with('orders',orders::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        orders::create($request->all());

        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    public function GetTrashed()
    {
        $order = orders::onlyTrashed()->get();
        return view('orders.trash')->with('orders',$order);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders= orders::withTrashed()->where('id',$id)->first();
        if ($orders->trashed()){
            $orders->forceDelete();
        }else{
            $orders->delete();
        }
        return redirect(route('orders.index'));
    }
    public function restore($id)
    {
        orders::withTrashed()->where('id',$id)->restore();
        return redirect(route('orders.index'));
    }
}
