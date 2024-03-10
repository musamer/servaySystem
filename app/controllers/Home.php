<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * home class
 */
class Home
{
	use MainController;
	/** this is main home */
	public function index()
	{

		$this->view('home');
	}
}
