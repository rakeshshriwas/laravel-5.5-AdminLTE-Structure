<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller{
    
    public function dashboard(){
    	return view('pages.dashboard')
    	->with( array( 'heading' => 'Admin Dashboard', 'page_title' => 'Dashboard', 'active_link' => 'dashboard'));
    }
}
