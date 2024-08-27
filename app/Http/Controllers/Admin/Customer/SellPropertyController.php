<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\SellProperty;
use Illuminate\Http\Request;

class SellPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Sell Property';
        $sell_propertys = SellProperty::paginate(10);
        return view('admin.customer.sell-property', compact('title', 'sell_propertys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Sell Property';
        return view('guest.property.sell-property', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SellProperty::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect(url('property/sell'));
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
