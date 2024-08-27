<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\JoinAgent;
use Illuminate\Http\Request;

class JoinAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Join Agent';
        $agents = JoinAgent::paginate(10);
        return view('admin.customer.join-agent', compact('title', 'agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Agent';
        return view('guest.agent.join-agent', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JoinAgent::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        // Membuat pesan WhatsApp berdasarkan input
        $name = $request->name;

        $message = urlencode("Halo, nama saya $name. Saya tertarik untuk bergabung menjadi agent Siperantara.");

        // Nomor WhatsApp tujuan
        $whatsappNumber = '6281283800498';

        // Redirect ke WhatsApp
        return redirect()->away("https://wa.me/$whatsappNumber?text=$message");
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
