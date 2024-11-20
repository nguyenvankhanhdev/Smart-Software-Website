<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogTours;
use App\Models\LoaiBlog;
use App\Models\Tours;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tours = Tours::with('tour_details.price', 'tour_images:name,image');
        $blogs = BlogTours::where('status', 1)
                            ->orderBy('id', 'DESC')->take(3)->get();
        return view("index", compact('tours', 'blogs'));
    }

    public function about() {
        return view('frontend.home.about');
    }

    public function contact() {
        return view('frontend.home.contact');
    }
}
