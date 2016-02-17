<?php namespace App\Http\Controllers;

class CamController extends YppController
{
	public function index()
	{

		$data['page_title'] = 'Live cams';

		$data['tags'] = "";

		$this->breadcrumbs->addCrumb('Live Cams');

		return view('cam.index', $data);
	}
}
