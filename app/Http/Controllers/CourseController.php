<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoris;
use App\Models\Contact;
use App\Models\Kelas;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategoris::all();
        $contact = Contact::First();
        $program = Kelas::all();
        return view("courses",compact('kategori','contact','program'));
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
       //dd(Str::replace('-', ' ', $param));
       //dd($param);
       $contact = Contact::First();
       $cek = Str::replace('-', ' ', $param);
       $program = Kelas::where('title',$cek)->first();
       //dd($program);

       return view("coursesdetail",compact('program','contact'));
    }

    public function category(Request $request)
    {
       //dd(Str::replace('-', ' ', $param));
       //dd($param);
       $kategori = Kategoris::all();
       $category = $request->category;
       $contact = Contact::First();
       $program = Kelas::where('kategori',$category)->get();
       //dd($program);

       return view("coursecategory",compact('program','contact','kategori'));
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
