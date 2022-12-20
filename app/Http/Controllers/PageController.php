<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PageController extends Controller
{
    public function homePage () {
        $services = Post::where('status','=','active')->where('category','=','service')->get();
        $about = Post::where('category','about')->first();
        return view('client.index')->with(['services' => $services,'about' => $about]);
    }

    public function dashboard() {
        return view('admin.dashboard');
     }

    public function servicePage() {
         $services = Post::where('category','service')->get();
         return view('client.post')->with(['services'=>$services]);
    }

    public function serviceDetails($slug){
        $services = Post::where('category','service')->get();
        $service = Post::where('slug',$slug)->first();
        return view('client.detail',compact('services','service'));
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
