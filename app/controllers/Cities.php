<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');



class Cities
{
	use MainController;

	public function index()
	{
		$ses  = new \Core\Session;
		if (!$ses->is_logged_in()) {
			redirect('login');
		}

		$cities = new \Model\Cities;
		$cities->order_column = 'city_id';
		$arr['is_deleted'] = 0 ;
		$data['no'] = 1;
		$data['cities'] = $cities->where($arr);


		$this->view('header');
		$this->view('cities/display', $data);
		$this->view('footer');

	}

	public function add()
	{

		$ses  = new \Core\Session;
		if (!$ses->is_logged_in()) {
			redirect('login');
		}
		$cities = new \Model\Cities;
		$req = new \core\Request;



		if($req->posted()){
			if (!empty($_POST['city_name'])) {
				$data['city_name'] = $_POST['city_name'];
				$data['city_code'] = $_POST['city_code'];
				$cities->insert($data);
				redirect('cities');
			} else {
				echo "إسم المدينة لايمكن أن يكون فارغ";
			}

		}

		$this->view('header');
		$this->view('cities/add');
		$this->view('footer');
	}

	public function edit()
	{  	
		$ses  = new \Core\Session;
		if (!$ses->is_logged_in()) {
			redirect('login');
		}


		$cities = new \Model\Cities;
		$req = new \Core\Request;
		$arr['city_id'] = base64_decode(get_id_from_url($_GET));
		$data['cityData'] = $cities->first($arr);

			if( $req->posted()){
				$cities->update( $req->post('city_id') , $req->post(), 'city_id');
				redirect('cities');
				exit();
			}


		$this->view('header');
		$this->view('cities/edit' , $data);
		$this->view('footer');

	}

	public function delete()
	{
		$ses  = new \Core\Session;
		if (!$ses->is_logged_in()) {
			redirect('login');
		}


		$data['cityData'] = new \Model\Cities;
		$id = base64_decode(get_id_from_url( $_GET));
		$id_column = 'city_id';
		$arr['is_deleted'] = 1;
		$data['cityData']->update($id , $arr , $id_column);
		redirect('cities/display');
		exit();

	}
}
