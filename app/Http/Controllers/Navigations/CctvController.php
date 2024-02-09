<?php

namespace App\Http\Controllers\Navigations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function index()
    {
    return view('pages.cctv');
    }
}

