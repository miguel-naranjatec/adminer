<?php

namespace Naranjatec\Adminer\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminerController extends Controller
{

	public function index()
	{
		//include dirname(dirname(__DIR__)) . '/resources/adminer/adminer-4.8.1.php';

	
		
		require( __DIR__ . '/../../resources/adminer/adminer-4.8.1.php' );
		


		//require __DIR__ . './resources/adminer/adminer-4.8.1.php';
		//return view('login::login');
	}
}
