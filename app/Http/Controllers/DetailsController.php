<?php

namespace App\Http\Controllers;

use App\Models\details;
use Illuminate\Http\Request;
use App\Models\offers;
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        details::create($request->all());
        return view('details.index')->with('offerid' , $request->offer_id)->with('details',details::all()->where('offer_id',$request->offer_id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('details.index')->with('offerid' , $id)->with('details',details::all()->where('offer_id',$id));

    }
    public function insert($id)
    {
        return view('details.create')->with('offerid' , $id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(details $detail)
    {
        return view('details.edit')->with('details',$detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, details $detail)
    {
        $detail->update([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'title_es' => $request->title_es,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_es' => $request->description_es
        ]);
        return redirect(route('details.show',$request->offer_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $details = details::all()->where('id', $id);

        foreach ($details as $detail) {
            $offer_id = $detail->offer_id;
        }
        details::destroy($id);
        return redirect(route('details.show',$offer_id));
    }
}
