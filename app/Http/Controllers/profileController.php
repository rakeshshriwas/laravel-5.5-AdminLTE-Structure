<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller{
    
    public function userProfile(){
    	return view('pages.profile')
    	->with( array( 'heading' => 'Admin Profile', 'page_title' => 'Profile', 'active_link' => 'profile'));
    }
}
