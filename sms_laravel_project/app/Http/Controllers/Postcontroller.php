<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
 
{
    public function create(){
        return view('create');
    }
    public function insert_data(Request $request){
        $data['name']=$request->name;
        $data['mobile']=$request->mobile;
        $data['address']=$request->address;
        $data['department']=$request->department;
        DB::table('info')->insert($data);
        return redirect('show');
    }
    //

    public function show(){
        $data['info']=DB::table('info')->get();
        return view('show',$data);
    }

    public function show_single__data($id){
        $data['info']=DB::table('info')->where('id',$id)->first();
        return view('show_single_data',$data);
    }
    public function edit_data($id){
        $data['info']=DB::table('info')->where('id',$id)->first();
        return view('edit',$data);
    }

    public function update_data(Request $request, $id){
        $data['name']=$request->name;
        $data['mobile']=$request->mobile;
        $data['address']=$request->address;
        $data['department']=$request->department;
        DB::table('info')->where('id',$id)->update($data);
        return redirect('show');

    }

    public function delete_data(Request $request, $id){
        
        DB::table('info')->where('id',$id)->delete();
        return redirect('show');

    }







}
