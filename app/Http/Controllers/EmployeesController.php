<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::take(5)->get();
        $employees = Employee::orderBy('id', 'desc')->take(10)->get();
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


        return view('blog.index', ['employees' => $employees]);
    }
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => '',
            'name' => 'required|unique:employees|max:255',
            'excerpt' => 'required',
            'dob' => '',
            'post' => 'required',
            'sallary' => '',
            'address' => '',
            'min_to_read' => 'min:0|max:60',
            // 'image' =>['required','mimes:jpg,png,jpeg','max:5048']

            'image' => ''

        ]);
        // dd($request->all()); 
        // exit;
        // $employee = new Employee();
        // $employee->emp_id = $request->emp_id;
        // $employee->name = $request->name;
        // $employee->excerpt = $request->excerpt;
        // $employee->dob = $request->dob;
        // $employee->post = $request->post;
        // $employee->sallary = $request->sallary;
        // $employee->address = $request->address;
        // $employee->min_to_read = $request->min_to_read;
        // $employee->image_path = 'temporary';
        // $employee->is_published = $request->is_published === 'on';
        // $employee->save();

        Employee::create([
            'emp_id' => $request->emp_id,
            'name' => $request->name,
            'excerpt' => $request->excerpt,
            'dob' => $request->dob,
            'post' => $request->post,
            'sallary' => $request->sallary,
            'address' => $request->address,
            'min_to_read' => $request->min_to_read,
            // 'image_path' => 'temporary',
            'image_path' => $this->storeImage($request),
            'is_published' => $request->is_published === 'on',
        ]);
        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // dd($employee);
        return view('blog.show', [
            'employee' => Employee::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view(
            'blog.edit',
            [
                'employee' => Employee::where('id', $id)->first()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validated();
        $request->validate([
            'emp_id' => '',
            'name' => 'required|unique:employees|max:255',
            'excerpt' => 'required',
            'dob' => '',
            'post' => 'required',
            'sallary' => '',
            'address' => '',
            'min_to_read' => 'min:0|max:60',
            // 'image' =>['required','mimes:jpg,png,jpeg','max:5048'],
            'image' => '',


        ]);
        //    dd("test");
        //dd($request->all());
        // dd($request->except(['_token','_method']));
        // Employee::where('id',$id)->update(
        //     [
        //         'emp_id' => $request->emp_id,
        //         'name' => $request->name,
        //         'excerpt' => $request->excerpt,
        //         'dob' => $request->dob,
        //         'post' => $request->post,
        //         'sallary' => $request->sallary,
        //         'address' => $request->address,
        //         'min_to_read' => $request->min_to_read,

        //         'image_path' => $request->image,
        //         'is_published' => $request->is_published === 'on',
        //     ] );
        //     return redirect(route('blog.index'));
        Employee::where('id', $id)->update($request->except([
            '_token', '_method',
        ]));

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("test");
      Employee::destroy($id);
      return redirect( route('blog.index'))->with('message','Employee has been deleted');
    }
    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        return $request->image->move(public_path('images'), $newImageName);
    }
}