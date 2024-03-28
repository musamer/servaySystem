<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

class _404
{
	use MainController;

	public function index()
	{
		$this->view('header');
		$this->view('404');
		$this->view('footer');
	}
}
