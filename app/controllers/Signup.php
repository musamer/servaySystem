<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * signup class
 */
class Signup
{
	use MainController;

	public function index()
	{

		$data['user'] = new \Model\User;
		$req = new \Core\Request;
		if ($req->posted()) {
			$data['user']->signup($_POST);
		}
		$this->view('header');
		$this->view('signup', $data);
	}
}
