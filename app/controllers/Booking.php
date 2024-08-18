<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * home class
 */
class Booking
{
	use MainController;
	/** this is main home */
	public function index()
	{
		$status = [
			1 => 'Active',
			2 => 'Not Active'
		];

		$book = new \Model\Booking;
		$clint = new \Model\Clint;
		$user = new \Model\User;
		$arr['clintData'] = $clint;
		$arr['userData'] = $user;
		$arr['bookData'] = $book->findAll();
		$arr['status'] = $status;
		$this->view('booking/index', $arr);
	}

	public function add()
	{
		$req = new \Core\Request;
		$book = new \Model\Booking;
		$clint = new \Model\Clint;
		$arr['clintData'] = $clint->findAll();
		if ($req->posted()) {
			// show($req->post());
			$book->insert($req->post());
			redirect('booking');
		}
		$this->view('booking/book', $arr);
	}
	public function edit()
	{
		$req = new \Core\Request;
		$book = new \Model\Booking;
		$id = base64_decode(get_id_from_url($_GET));
		$arr['id'] = $id;
		$data['bookingData'] = $book->first($arr);
		if ($req->posted()) {
			$book->update($id, $req->post());
			redirect('booking');
		}
		$this->view('booking/edit', $data);
	}
}
