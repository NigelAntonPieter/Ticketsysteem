<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class PageController extends Controller
{

    

    public function viewHome(){
        return view('home');
    }

    public function contact (){
        return view('contact');
    }
    
    
    public function viewAboutUs(){
        return view('about-us');
    }

    public function viewContact(){
        return view('contact');
    }

    public function createContacts(REQUEST $request )
    {
        $request;
        $newContact = new Contact();
        $newContact->first_name=$request->input('first_name');
        $newContact->last_name=$request->input('last_name');
        $newContact->email=$request->input('email');
        $newContact->number=$request->input('number');
        $newContact->description=$request->input('description');
        $newContact->save();

        return redirect()->route('home');
    }


}
