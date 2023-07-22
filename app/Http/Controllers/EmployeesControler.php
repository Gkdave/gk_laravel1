<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::all();
        // $employees = Employee::orderBy('id','desc')->take(10)->get();
        // $employees = Employee::where('min_to_read',2)->get();
        // $employees = Employee::where('min_to_read','!=',2)->get();
          // dd($employees);
        // Employee::chunk(25, function ($employees){
        //     foreach ($employees as $employee){
        //         echo $employee->name . '<br>' ;
        //     }
        // });
        // $employees = Employee::get()->count();
        // $employees = Employee::sum('min_to_read');
        // $employees = Employee::avg('min_to_read');
            //  dd($employees);
        
      
        return view('blog.index');
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
        $employee = Employee::find($id);
        dd($employee);
      
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