<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome  (){
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
}
