<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * login class
 */
class Login
{
	use MainController;

	public function index()
	{

		$data['user'] = new \Model\User;
		$req = new \Core\Request;
		if ($req->posted()) {
			$data['user']->login($_POST);
		}
		$this->view('header');
		$this->view('login', $data);
	}
}
