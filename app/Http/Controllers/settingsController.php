<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingsController extends Controller{

    public function settings(){
    	return view('pages.settings')
    	->with( array( 'heading' => 'Admin Settings', 'page_title' => 'Settings', 'active_link' => 'settings'));
    }
}
