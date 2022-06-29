<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::whereDate('departure_time', '2022-06-29')->get();

        return view('home', compact('trains'));
    }
}
