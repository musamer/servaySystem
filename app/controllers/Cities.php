<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');



class Cities
{
	use MainController;

	public function index()
	{
		$cities = new \Model\Cities_m;
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
			$cities = new \Model\Cities_m;
			if (!empty($_POST['city_name'])) {
				$data['city_name'] = $_POST['city_name'];
				$data['city_code'] = $_POST['city_code'];
				$cities->add_city($data);
				header('location: ./');
				exit();
			} else {
				echo "إسم المدينة لايمكن أن يكون فارغ";
			}
		}
	}
}
