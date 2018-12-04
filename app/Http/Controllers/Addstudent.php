<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Addstudent extends Controller
{

	public function addstudent(){

		return view('admin.addstudent');
	}
    
}
