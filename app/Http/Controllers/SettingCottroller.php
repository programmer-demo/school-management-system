<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingCottroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $setting = Setting::findOrFail($id); // Load the setting by ID
        return view('settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id,setting $setting)
    {
        $setting->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'logo' => 'required',
        ]);

        $setting = Setting::find($id);

        $setting->setting->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'logo' => $request->logo,
        ]);
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
