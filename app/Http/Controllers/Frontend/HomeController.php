<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Models\Tour;

use App\Models\LoaiBlog;

use App\Models\TourTypes;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $tours = Tour::all()->take(8)->sortByDesc('id');
        return view('index', compact('tours'));

    }

}
