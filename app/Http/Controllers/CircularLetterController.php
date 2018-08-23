<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CircularLetterController extends Controller
{
    public function showAll(){
        return view('circular');
    }
}
