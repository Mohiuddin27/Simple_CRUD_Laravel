<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
     
   public function index()
   {
       $data=student::all();
       return view('student.index',['data'=>$data]);
   }
   public function create(){
       return view('student.create');
   }
   public function edit($id){
       $data=student::find($id);
       return view('student.edit',['data'=>$data]);
   }
   public function show($id){
      $data=student::find($id);
       return view('student.show',['data'=>$data]);
   }
   public function store(Request $req){

         student::create([
            'name' => $req->name,
            'email'=> $req->email,
            'cell'=> $req->cell,
            'uname'=>$req->uname
         ]);
         return redirect('/student');

   }
   public function delete($id){
        $data=student::find($id);
        $data->delete();
        return redirect('/student');
   }
   public function update(Request $req,$id){
       $data=student::find($id);
       $data->name=$req->input('name');
       $data->email=$req->input('email');
       $data->cell=$req->input('cell');
       $data->uname=$req->input('uname');
       $data->update();

       return redirect('/student');
   }
}
