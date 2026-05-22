<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
   public  function create () {
     $admission =Admission::all();
    return view('admission.create',compact('admission'));
}
  public  function index () {
     $courses =Course::all();
    return view('admission.index',compact("courses"));
}
  public  function store (Request $request) {

    $admission =new Admission();
    $admission->name=$request->name;
    $admission->email=$request->email;
    $admission->phone=$request->phone;
    $admission->course_id=$request->course_id;
    $admission->save();
    toast("admission created Succesfully",type:"success");
    return redirect('/admission/index');


}
public function delete($id){

  Admission::find($id)->delete();
    toast("Admission deleted Succesfully",type:"success");
  return redirect("/admission/create");

}
public function edit($id){
    $admission=Admission::find($id);
    $courses =Course::all();
    return view("/admission/edit",compact('admission','courses'));

}
public  function update (Request $request ,$id) {

    $admission =Admission::find($id);
    $admission->name=$request->name;
    $admission->email=$request->email;
    $admission->phone=$request->phone;
    $admission->course_id=$request->course_id;
    $admission->save();
      toast("admission Updated Succesfully",type:"success");
    return redirect('/admission/index');



}
}


