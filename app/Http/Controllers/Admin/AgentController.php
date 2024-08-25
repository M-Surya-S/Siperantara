<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Agent';
        $agents = Agent::paginate(10);
        return view('admin.agent.my-agent', compact('title', 'agents'));
    }

    /**
     * Search for a listing from the resource.
     */
    public function search(Request $request)
    {
        $title = 'Agent';
        $search = $request->input('search');

        $agents = Agent::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->paginate(10);

        return view('admin.agent.my-agent', compact('title', 'agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Agent';
        return view('admin.agent.add-agent', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Handle image upload
        $filepath = $request->file('image')->store('public/agent/image');

        Agent::create([
            'image' => $filepath,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
        ]);

        return redirect(url('dashboard/my-agent'));
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
        $title = 'Edit Agent';
        $agent = Agent::findOrFail($id);
        return view('admin.agent.edit-agent', compact('title', 'agent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agent = Agent::find($id);

        $existingImage = $agent->image;

        if ($request->has('image')) {
            // Handle image upload
            $filepath = $request->file('image')->store('public/agent/image');
            $agent->update([
                'image' => $filepath,
            ]);

        } else {
            $agent->update([
                'image' => $existingImage,
            ]);
        }

        $agent->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
        ]);

        return redirect(url('dashboard/my-agent'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agent = Agent::findOrfail($id);

        // Hapus file gambar dari storage
        Storage::delete($agent->image);
        
        $agent->delete();
        return redirect(url('dashboard/my-agent'));
    }
}
