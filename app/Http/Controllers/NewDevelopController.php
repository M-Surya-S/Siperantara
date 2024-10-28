<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewDevelopController extends Controller
{
    public function index()
    {
        $title = 'New Develop';
        return view('guest.property.new-develop', compact('title'));
    }

    public function detail()
    {
        $title = 'New Develop';
        return view('guest.property.detail-new-develop', compact('title'));
    }

    public function download_flyer() 
    {
        $filePath = public_path('assets/flyer/Cluster-Garuda.pdf'); 

        if (!file_exists($filePath)) {
            return back()->withErrors(['file' => 'File tidak ditemukan.']);
        }

        return response()->download($filePath);
    }
}
