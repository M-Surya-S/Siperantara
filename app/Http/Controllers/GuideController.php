<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $title = 'Guide';
        return view('guide', compact('title'));
    }
}
