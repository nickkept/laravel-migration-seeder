<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    function index(){
        $trains = Train::all();
        return view("index", ['trains' => $trains]);
    }
}
