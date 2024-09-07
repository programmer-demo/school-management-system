<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if (!Customer::where('chat_id', '=', $request->chat_id)->exists()) {
            $customer = Customer::create([
                'chat_id' => $request->chat_id,
                'fullName' => $request->first_name . ' ' . $request->last_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'text' => $request->text,
                'gender' => '',
                'address' => '',
            ]);
        }else{
            $customer = Customer::orderBy('id' , 'DESC')->get();
            return response()->json(['message' => 'already exist' , 'customer' => $customer]);
        }
        return response()->json(['message' => 'success' , 'customer' => $customer]);
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
