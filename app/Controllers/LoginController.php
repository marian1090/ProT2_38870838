<?php
namespace App\Controllers;

class LoginController extends BaseController{


	public function index(){
		helper(['form']);
		$data['title'] = 'login';
		echo view('head', $data);
        echo view('menu');
        echo view('login');
        echo view('footer');
	}

}