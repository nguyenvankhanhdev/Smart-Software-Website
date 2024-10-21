<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/tours');

        echo $response->getBody();
    }
}
