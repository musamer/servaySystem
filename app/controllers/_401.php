<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

class _401
{
	use MainController;

	public function index()
	{
		$this->view('header');
		$this->view('401');
		$this->view('footer');
	}
}
