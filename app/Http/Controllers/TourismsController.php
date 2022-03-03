<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tourisms;
use Illuminate\Support\Facades\Storage;
use LaravelLocalization;

class TourismsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tourism.index')->with('tourisms',tourisms::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tourism.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        tourisms::create([
            'name_ar' => $request->name_ar ,
            'name_en'=> $request->name_en,
            'name_es'=> $request->name_es ,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_es' => $request->description_es,
            'image' => $request->image->store('images/tourism','public')
        ]);

        return redirect(route('tourism.index'));
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
    public function edit(tourisms $tourism)
    {
        return view('tourism.edit')->with('tourism',$tourism);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tourisms $tourism)
    {
        $data = $request->only(['name_ar' , 'name_en' , 'name_es',
            'description_ar','description_en','description_es']);
        if ($request->hasFile('image')){
            $image = $request->image->store('images','public');
            Storage::disk('public')->delete($tourism->image);
            $data['image']= $image;
        }
        $tourism->update($data);
        return redirect(route('tourism.index'));
    }

    public function getAllTourism()
    {
        $tourism = tourisms::select('id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'description_'.LaravelLocalization::getCurrentLocale().' as description',
            'image as image',
        )->get();
       return view('/tourism')->with('tourisms',$tourism);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tourisms::destroy($id);
        return redirect(route('tourism.index'));
    }
}
