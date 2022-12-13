<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;

class PageController extends Controller
{
    public function homePage () {
        $services = Service::all();
        return view('client.index')->with(['services' => $services]);
    }

    public function dashboard() {
        return view('admin.dashboard');
     }

    public function servicePage() {
         $services = Service::all();
         return view('client.service')->with(['services'=>$services]);
    }

    public function serviceDetails($slug){
        $services = Service::all();
        $service = Service::where('slug',$slug)->first();
        return view('client.detail',compact('service','services'));
    }

    public function aboutPage () {
        return view('client.about');
    }

    public function contactPage() {
        return view('client.contact');
    }
    public function thankYouPage() {
        return view('client.thank_you');
    }
}
