<?php namespace App\Http\Controllers;

use \Input;

class LoginController extends YppController
{
	public function index()
	{
		$network = $this->network;

		$data['page_title'] = $this->network->name.' Login';

		return view('login', $data);
	}
}
