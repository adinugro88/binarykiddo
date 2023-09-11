<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Event;
use App\Models\Contact;
use Illuminate\Support\Str;

class PromoeventController extends Controller
{
    public function index()
    {
        $promo = Promo::all();
        $event = Event::all();
        $contact = Contact::First();
        return view("promoevent",compact('contact','promo','event'));
    }

    public function show($param)
    {
        $cek = Str::replace('-', ' ', $param);
        $promo = Promo::where('title',$cek)->first();
        $event = Event::where('title',$cek)->first();
        $contact = Contact::First();
        return view("promoeventdetail",compact('promo','event','contact'));
    }
}
