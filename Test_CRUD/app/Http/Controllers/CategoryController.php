<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = category::all();
        return view('backend.category.show',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'student_name' => 'required|max:255',
            'student_id' => 'required',
            'student_department' => 'required',
            'student_address' => 'required',
        ]);
        $data['student_name']=$request->student_name;
        $data['student_id']=$request->student_id;
        $data['student_department']=$request->student_department;
        $data['student_address']=$request->student_address;
        category::create($data);
        return redirect()->route('categories.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        $data['categories']=$category;
        return view('backend.category.single_show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $data['categories']=$category;
        return view('backend.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        
        $data['student_name']=$request->student_name;
        $data['student_id']=$request->student_id;
        $data['student_department']=$request->student_department;
        $data['student_address']=$request->student_address;
        $category->update($data); 
       /*  category::where('id',$category->id)->update([     
        'student_name'->$request->student_name,
        'student_id'->$request->student_id,
        'student_department'->$request->student_department,
         'student_address'->$request->student_address,
        ]); */
       // return redirect()->route('categories.show');
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');

    }
}
