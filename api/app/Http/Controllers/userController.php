<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function getcatalogo(){

        return "asdfgh";
		$data = DB::select('SELECT u.id, u.usuario, u.password
							FROM users u');
		return $data;
	}
}

