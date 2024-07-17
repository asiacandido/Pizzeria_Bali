<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    function home() {
        return view('welcome');
    }
};
