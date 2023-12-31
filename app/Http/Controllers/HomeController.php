<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Banner;
use App\Models\Point;
use App\Models\Founder;
use App\Models\Kelas;
use App\Models\Contact;
use App\Models\Picturetool;
use App\Models\Kategoris;
use App\Models\Event;
use App\Models\Promo;
use App\Models\Partner;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        $banner = Banner::First();
        $point = Point::orderBy('id', 'ASC')->get();
        $founder = Founder::First();
        $picture = Picturetool::all();
        $partner = Partner::all();
        $contact = Contact::First();
        $program = Kelas::where("show","show")->limit(8)->get();
        $kategori = Kategoris::where("show","show")->get();
        $event = Event::all();
        $promo = Promo::all();
        //dd($kelas);
        return view('welcome2', compact('kategori','partner','about','banner','point','founder','program','contact','picture','promo','event'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param)
    {
       dd($param);
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
        //
    }
}
