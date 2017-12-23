<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller{
    
    public function getAllTask(){
    	return view('pages.taskList')
    	->with( array( 'heading' => 'Admin Task', 'page_title' => 'Task', 'active_link' => 'task'));
    }
}
