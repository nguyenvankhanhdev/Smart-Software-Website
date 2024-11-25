<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tour;

class TourController extends Controller
{
    public function detailsTour($slug) {
        $details = Tour::where('slug', $slug)->first();
        return view('frontend.tour.tour-detail',compact('details'));

    }
}
