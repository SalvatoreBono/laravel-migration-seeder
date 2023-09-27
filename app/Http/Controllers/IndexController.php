<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* importare Models\Train */
use App\Models\Train;

class IndexController extends Controller
{
    public function index()
    {
        /* SELECT * FROM `trains` WHERE `data_di_partenza` = CURRENT_DATE */
        $data = Train::all()->where("data_di_partenza", now()->toDateString());
        return view('index', ["trains" => $data]);
    }
}
