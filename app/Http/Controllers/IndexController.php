<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* importare Models\Train */
use App\Models\Train;

class IndexController extends Controller
{
    public function index()
    {

        $data = Train::all()->where("data_di_partenza", now()->toDateString());
        return view('index', ["trains" => $data]);
    }
}
