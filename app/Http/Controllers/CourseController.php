<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

   public  function create () {
     $courses =Course::all();
    return view('course.create',compact('courses'));
}
  public  function index () {
    return view('course.index');
}
  public  function store (Request $request) {

    $course =new Course();
    $course->name=$request->name;
    $course->price=$request->price;
    $course->description=$request->description;
    $file=$request->image;
    if($file){
        $file_name=time(). "." . $file->getClientOriginalExtension();
        $file->move("frontend/images",$file_name);
        $course->image ="frontend/images/".$file_name;
    }
    $course->save();
    toast("Course created Succesfully",type:"success");
    return redirect('/course/index');


}
public function delete($id){

  Course::find($id)->delete();
    toast("Course deleted Succesfully",type:"success");
  return redirect("/course/create");

}
public function edit($id){
    $course=Course::find($id);
    return view("/course/edit",compact('course'));

}
public  function update (Request $request ,$id) {

    $course =Course::find($id);
    $course->name=$request->name;
    $course->price=$request->price;
    $course->description=$request->description;
     $file=$request->image;
    if($file){
        $file_name=time(). "." . $file->getClientOriginalExtension();
        $file->move("frontend/images",$file_name);
        $course->image ="frontend/images/".  $file_name;
    }
    $course->save();
      toast("Course Updated Succesfully",type:"success");
    return redirect('/course/index');



}
}
