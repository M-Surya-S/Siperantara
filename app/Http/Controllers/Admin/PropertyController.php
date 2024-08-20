<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Property';
        return view('admin.property.my-property', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Property';
        return view('admin.property.add-property', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $property_id = Property::generatePropertyId();
        
        // Handle image upload
        $uploadedFiles = $request->file('image');
        $filePaths = [];
        if ($uploadedFiles) {
            foreach ($uploadedFiles as $file) {
                $path = $file->store('public/property/image');
                $filePaths[] = $path;
            }
        }

        // Collecting benefits
        $benefits = [
            $request->benefit_1,
            $request->benefit_2,
            $request->benefit_3,
            $request->benefit_4,
            $request->benefit_5,
            $request->benefit_6,
            $request->benefit_7,
            $request->benefit_8,
            $request->benefit_9,
            $request->benefit_10,
            $request->benefit_11,
            $request->benefit_12,
        ];

        Property::create([
            'property_id' => $property_id,
            'image' => json_encode($filePaths),
            'property_title' => $request->property_title,
            'property_price' => $request->property_price,
            'discount' => $request->discount,
            'property_tag' => $request->property_tag,
            'address' => $request->address,
            'description' => $request->description,
            'lot_area' => $request->lot_area,
            'home_area' => $request->home_area,
            'lot_dimensions' => $request->lot_dimensions,
            'rooms' => $request->rooms,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'veranda_balcony' => $request->veranda_balcony,
            'year_built' => $request->year_built,
            'property_status' => $request->property_status,
            'certificate' => $request->certificate,
            'living_room' => $request->living_room,
            'garage' => $request->garage,
            'dining_area' => $request->dining_area,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'gym_area' => $request->gym_area,
            'garden' => $request->garden,
            'parking' => $request->parking,
            'benefits' => json_encode($benefits),
            'link_location' => $request->link_location,
        ]);

        return redirect(url('dashboard/my-property'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
