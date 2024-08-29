<?php

namespace App\Http\Controllers;

use App\Models\DownloadGuide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $title = 'Guide';
        return view('guest.guide.guide', compact('title'));
    }
    
    public function buyers()
    {
        $title = 'Buyers Guide';
        return view('guest.guide.buyers.detail-buyers-guide', compact('title'));
    }
    
    public function buyersIndex()
    {
        $title = 'Buyers Guide';
        return view('guest.guide.buyers.buyers-guide-download', compact('title'));
    }

    public function buyersDownload(Request $request)
    {
        DownloadGuide::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'information' => 'Download Buyers Guide',
        ]);

        $filePath = public_path('assets/guide/Siperantara Buyers Guide.pdf'); 

        if (!file_exists($filePath)) {
            return back()->withErrors(['file' => 'File tidak ditemukan.']);
        }

        return response()->download($filePath);
    }
}
