<?php

namespace App\Http\Controllers;

use Facade\Ignition\Context\LaravelRequestContext;
use Illuminate\Http\Request;
use App\http\Requests\OfferRequest;
use App\Models\offers;
use Illuminate\Support\Facades\Storage;
use LaravelLocalization;


class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('offer.index')->with('offers',offers::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        offers::create([
            'name_ar' => $request->name_ar ,
            'name_en'=> $request->name_en,
            'name_es'=> $request->name_es ,
            'type_ar' => $request->type_ar,
            'type_en' => $request->type_en,
            'type_es' => $request->type_es,
            'node_ar' => $request->node_ar,
            'node_en' => $request->node_en,
            'node_es' => $request->node_es,
            'price' => $request->price,
            'image' => $request->image->store('images/offer','public')
        ]);
        // offers::create($request->all());
//       session()->flash('success' , 'تم الادخال');
         return redirect(route('offers.index'));
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
    public function edit(offers $offer)
    {
        return view('offer.edit')->with('offers' ,$offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offers $offer)
    {
        $data = $request->only(['name_ar' , 'name_en' , 'name_es',
            'type_ar','type_en','type_es',
            'node_ar','node_en','node_es','price'
        ]);
        if ($request->hasFile('image')){
            $image = $request->image->store('images','public');
            Storage::disk('public')->delete($offer->image);
            $data['image']= $image;
        }
    $offer->update($data);


        return redirect(route('offers.index'));
    }

    public function getAllOffers()
    {
        $offers = offers::select('id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'type_'.LaravelLocalization::getCurrentLocale().' as type',
            'node_'.LaravelLocalization::getCurrentLocale().' as node',
            'price as price',
            'image as image',
        )->get();
       return view('/offer',compact('offers'));
    }


    public function GetTrashed()
    {
        $offers = offers::onlyTrashed()->get();
        return view('offer.trash')->with('offers',$offers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offers = offers::withTrashed()->where('id',$id)->first();
        if ($offers->trashed()){
            $offers->forceDelete();
            Storage::disk('public')->delete($offers->image);
        }else{
         $offers->delete();
        }
        return redirect(route('offers.index'));
    }
    public function restore($id)
    {
        offers::withTrashed()->where('id',$id)->restore();
        return redirect(route('offers.index'));
    }
}
