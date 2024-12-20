<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();
        return view('subjects.index' , compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addSub()
    {
        return view('subjects.formAdd');
    }

    public function saveSub(request $r){
      
        $data =$r->except('_token');
        //dd($data);
        $insert = DB::table('subjects')->insert($data);
        if($insert){
            
            return redirect(url('form-add'))
            ->with('Success','Insert is successfully!');
        }else{
            return redirect(url('form-add'))
            ->with('Error','Insert is error!');
        }
     

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
