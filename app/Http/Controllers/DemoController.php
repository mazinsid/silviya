<?php

namespace App\Http\Controllers;

use App\Models\demo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use LaravelLocalization;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        demo::create([
            'tourism_id' => $request->tourism_id,
            'image' => $request->image->store('images/dome','public')
        ]);
        $id = $request->tourism_id;
        return redirect(route('demo.show',$id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demos = demo::all()->where('tourism_id',$id);
        return view('tourism.demo')->with('tourismid',$id)->with('demos',$demos);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demos = demo::all()->where('id',$id);
        foreach ($demos as $demo){
            $tourism_id = $demo->tourism_id;
            $image = $demo->image;
        }
        demo::destroy($id);
        Storage::disk('public')->delete($image);
        return redirect(route('demo.show',$tourism_id));
    }
}
