<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Property';
        $propertys = Property::paginate(6);
        return view('property', compact('title', 'propertys'));
    }

    /**
     * Search for a listing from the resource.
     */
    public function search(Request $request)
    {
        $query = Property::query();

        if ($request->filled('bedrooms')) {
            $query->where('beds', $request->input('bedrooms'));
        }

        if ($request->filled('bathrooms')) {
            $query->where('baths', $request->input('bathrooms'));
        }

        if ($request->filled('floors')) {
            $query->where('floors', $request->input('floors'));
        }

        if ($request->has('status')) {
            $status = $request->input('status');
    
            if ($status == 'new-develop') {
                $query->where('property_status', 'New Develop');
            } elseif ($status == 'buy-or-rent') {
                $query->whereIn('property_status', ['For Sale', 'For Rent']);
            }
        }

        $title = 'Property';
        $propertys = $query->paginate(6);
        return view('property', compact('title', 'propertys'));
    }


    /**
     * Display the specified resource.
     */
    public function detail(string $id)
    {
        $title = 'Property Detail';
        $property = Property::findOrFail($id);
        return view('detail.detail-property', compact('title', 'property'));
    }
}
