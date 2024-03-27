<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');



class Cities
{
	use MainController;

	public function index()
	{
		$cities = new \Model\Cities;
		$cities->order_column = 'city_id';
		$arr['is_deleted'] = 0 ;
		$data['no'] = 1;
		$data['cities'] = $cities->where($arr);
		$this->view('cities/display', $data);

	}

	public function add()
	{
		$this->view('cities/add');

		if (isset($_POST['btn_add_city'])) {
			$cities = new \Model\Cities;
			if (!empty($_POST['city_name'])) {
				$data['city_name'] = $_POST['city_name'];
				$data['city_code'] = $_POST['city_code'];
				$cities->add_city($data);
				redirect('cities');;
				exit();
			} else {
				echo "إسم المدينة لايمكن أن يكون فارغ";
			}
		}
	}

	public function edit()
	{  
		$cities = new \Model\Cities;
		//$arr['is_deleted'] = 0;
		$arr['city_id'] = base64_decode(get_id_from_link($_GET));
		$data['cityData'] = $cities->first($arr);
		$this->view('cities/edit' , $data);
		//show($data);

		if (isset($_POST['btn_edit_city'])) {
			if (!empty($_POST['city_name'])) {
				$id = $_POST['city_id'] ;
				$id_column = 'city_id';
				show($id);
				$data['city_name'] = $_POST['city_name'];
				$data['city_code'] = $_POST['city_code'];
				$cities->edit_city( $id , $data, $id_column);
				redirect('cities');
				exit();
			} else {
				echo "إسم المدينة لايمكن أن يكون فارغ";
			}
		}

		if (isset($_POST['btn_canceledit_city'])) {
			redirect('cities');
			exit();
		}
	}

	public function delete()
	{
		$data['cityData'] = new \Model\Cities;
		$id = base64_decode(get_id_from_link( $_GET));
		$id_column = 'city_id';
		$arr['is_deleted'] = 1;
		$data['cityData']->delete_city($id , $arr , $id_column);
		redirect('cities');
		exit();

	}
}
