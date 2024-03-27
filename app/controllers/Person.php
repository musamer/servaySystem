<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * person class
 */
class Person
{
	use MainController;
	/** this is main home */
	public function index()
	{
        $person = new \Model\Person;
        $person->order_column = "person_id";
        $arr['is_deleted'] = 0;
        $data['personData'] = $person->where($arr);
		$this->view('person/index', $data);
	}
    public function edit(){
        $person = new \Model\Person;
        $req = new \Core\Request;
        $arr['person_id'] = base64_decode(get_id_from_link($_GET));
        $data['personData'] = $person->first($arr);
        if($req->posted()){
            $person->update($arr['person_id'],$_POST, 'person_id');
            redirect('person/index');
        }

        $this->view("person/edit",$data);
    }
    public function add(){
        $person = new \Model\Person;
        $req = new \Core\Request;
        if($req->posted()){
            $person->insert($_POST);
            redirect('person/index');
        }
        
        $this->view("person/add");

    }
    public function delete(){
        $person = new \Model\Person;
        $req = new \Core\Request;
        $arr['person_id'] = base64_decode(get_id_from_link($_GET));
        $del['is_deleted'] = 1;
        $person->update($arr['person_id'],$del, 'person_id');
        redirect('person/index');
        
    }
}
