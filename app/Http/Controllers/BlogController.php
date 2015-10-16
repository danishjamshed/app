<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
class BlogController extends Controller
{
    //
	
	public function index(){
		
	$task = new Task;
	$task = Task::all();
	return view('pages.blog',compact('task'));
	
	}
}
