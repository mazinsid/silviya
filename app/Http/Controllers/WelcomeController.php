<?php

namespace App\Http\Controllers;

use App\Models\demo;
use App\Models\details;
use App\Models\tourisms;
use Illuminate\Http\Request;
use App\Models\offers;
use App\Models\orders;
use LaravelLocalization;
class WelcomeController extends Controller
{
    public function index()
    {
        $offers = $offers = offers::select('id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'type_'.LaravelLocalization::getCurrentLocale().' as type',
            'node_'.LaravelLocalization::getCurrentLocale().' as node',
            'price as price',
            'image as image',
        )->orderBy('id', 'desc')->take(4)->get();
        $tourism = tourisms::select('id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'description_'.LaravelLocalization::getCurrentLocale().' as description',
            'image as image',
        )->orderBy('id', 'desc')->take(4)->get();
        return view('welcome')->with('offers',$offers)->with('tourisms',$tourism);
    }


    public function dashboard()
    {
        return view('dashboard')->with('offersT',offers::onlyTrashed()->count())->
        with('offers',offers::all()->count())->with('orderT',orders::onlyTrashed()->count())->
            with('order',orders::all()->count())->with('tourisms',tourisms::all()->count());
    }

    public function demo()
    {
        return view('demo');
    }



    public function details($id)
    {
         $offers = offers::select('id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'type_'.LaravelLocalization::getCurrentLocale().' as type',
            'node_'.LaravelLocalization::getCurrentLocale().' as node',
            'price as price',
            'image as image',
        )->get()->where('id', $id);


        $details = details::select(
            'title_'.LaravelLocalization::getCurrentLocale().' as title',
            'description_'.LaravelLocalization::getCurrentLocale().' as description',
            'offer_id as offer_id'
        )->get()->where('offer_id', $id);
        return view('details')->with('offers',$offers)->with('details',$details);
    }

    public function getAlldemo($id)
    {
        $demos = demo::all()->where('tourism_id',$id);
           $tourism = tourisms::select('id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'description_'.LaravelLocalization::getCurrentLocale().' as description',
            'image as image',
        )->get()->where('id', $id);
        return view('demo')->with('demos',$demos)->with('tourisms',$tourism);
    }
}
