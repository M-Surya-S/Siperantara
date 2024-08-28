<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\SendMessage;
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
        return view('guest.property.property', compact('title', 'propertys'));
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

        if ($request->has('tag')) {
            $tag = $request->input('tag');

            if ($tag == 'residental') {
                $query->where('property_tag', 'Residental');
            } elseif ($tag == 'commercial') {
                $query->where('property_tag', 'Commercial');
            } elseif ($tag == 'industrial') {
                $query->where('property_tag', 'Industrial');
            } elseif ($tag == 'land') {
                $query->where('property_tag', 'Land');
            }
        }

        if ($request->has('category')) {
            $category = $request->input('category');

            if ($category == 'houses') {
                $query->where('property_category', 'Houses');
            } elseif ($category == 'apartments') {
                $query->where('property_category', 'Apartments');
            } elseif ($category == 'land') {
                $query->where('property_category', 'Land');
            } elseif ($category == 'shophouse') {
                $query->where('property_category', 'Shophouse');
            } elseif ($category == 'wherehouse') {
                $query->where('property_category', 'Wherehouse');
            }
        }

        $title = 'Property';
        $propertys = $query->paginate(6);
        return view('guest.property.property', compact('title', 'propertys'));
    }


    /**
     * Display the specified resource.
     */
    public function detail(string $id)
    {
        $title = 'Property Detail';
        $property = Property::findOrFail($id);
        return view('guest.property.detail-property', compact('title', 'property'));
    }

    public function sendMessage(Request $request)
    {
        SendMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        // Membuat pesan WhatsApp berdasarkan input
        $name = $request->name;
        $propertyUrl = url()->current();

        // Membuat pesan dengan encoding URL yang benar
        $message = urlencode("Halo, nama saya $name. Saya tertarik untuk membeli properti berikut: $propertyUrl");

        // Nomor WhatsApp tujuan
        $whatsappNumber = '6281283800498';

        // Redirect ke WhatsApp
        return redirect()->away("https://wa.me/$whatsappNumber?text=$message");
    }
}
