<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){{
        $contact=new Contact();
        $contact->name=$request->name;
         $contact->number=$request->number;
          $contact->address=$request->address;
           $contact->email=$request->email;
           $contact->save();
           return redirect("/contact/index");
    }

    }
    public function index(){
       $contacts=Contact::all();
        return view("/contact/index",compact('contacts'));
    }
    public function delete($id){

        Contact::find($id)->delete();
        return redirect("/contact/index");
    }
}
