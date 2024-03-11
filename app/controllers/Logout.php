<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * logout class
 */
class Logout
{
	use MainController;

	public function index()
	{
		$ses = new \Core\Session;
		$ses->logout();
		redirect('login');
	}
}
