<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }


    public function about(){
    	$title = 'About 3w Academy 2021';
    	return view('about',compact('title'));
    }


    public function services(){
    	$data = array('titre'=>"Services",'listofservices'=> [ "creation decompte","versement","retrait","transfert"]);
    	
    	return view('services')->with($data);

    }



    public function contact(){
        return view('contact');
    }

    public function contactMessage()
    {
        $data = request()->validate([
            'nom' =>'required|',
            'email' =>'required|email',
            'mycomm' =>'required|max:250'

        ]);//bech nabedh mail to w bech nesta3em class 
        Mail::to('benabidsana@gmail.com')->send(new ContactMail());
        return redirect()->route('contact');
    }
}
