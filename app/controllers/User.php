<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * UserController class
 */
class User
{
    use MainController;

    public function index()
    {
        $data['user'] = new \Model\User;
        $del['is_deleted'] = 0;
        // Fetch all users using findAll() method from the User model
        $data['users'] = $data['user']->where($del); 
        $this->view('display_users', $data);
    }
    public function deleted()
    {
        $data['user'] = new \Model\User;
        $del['is_deleted'] = 1;
        $data['users'] = $data['user']->where($del); 
        $this->view('deleted_users', $data);
    }
    
    public function viewDeleted()
{
    redirect('user/deleted');
}
    
    public function add()
    {
        $data['user'] = new \Model\User;
        $req = new \Core\Request;
        if ($req->posted()) {
            // Call insert() method to add a new user
            $data['user']->signup($_POST);
        }
        $this->view('add_user', $data);
    }

    public function edit()  {
        $data['user'] =new \Model\User;
      $req = new \Core\Request;
      $id = base64_decode(get_id_from_url($_GET));
        $arr['is_deleted'] = 0;
        $arr['id'] = $id;
        $data['userdata']=$data['user']->first($arr);
        if($req->posted())
        {
            $data['user']->update($id,$req->post());
        }
      $this->view('edit_info',$data);
        
      }

    public function changeRole()
    {
        $req = new \Core\Request;
        $id = base64_decode(get_id_from_url($_GET));
        $data['user'] = new \Model\User;
        $data['user']->fieldUpdate($id, 'role', $req->post('role'));  
        redirect('user');
    }
    
    public function delete()
    {
        $id = base64_decode(get_id_from_url($_GET));
        $data['user'] = new \Model\User;
        $data['user']->softDelete($id); // Soft delete the user
        redirect('user');
    }
    
    public function restore()
    {
        $id = base64_decode(get_id_from_url($_GET));
        $data['user'] = new \Model\User;
        $data['user']->softDelete($id, 0); // Restore the user by setting is_deleted to 0
        redirect('user/deleted'); // Redirect back to the deleted users list
    }    

  
    public function status()
    {
        $req = new \Core\Request;
        $id = base64_decode(get_id_from_url($_GET));
        $data['user'] = new \Model\User;
        
        // Update the status of the user
        $newStatus = $req->post('status');
        $data['user']->fieldUpdate($id, 'status', $newStatus);  
        
        // Redirect back to the user list view
        redirect('user');
    }    

    public function banned()
    {
        $data['user'] = new \Model\User;
        $banned['status'] = 'banned';
        $data['bannedUsers'] = $data['user']->where($banned); 
        $this->view('status', $data);
    }

    public function unban()
    {
        $id = base64_decode(get_id_from_url($_GET));
        $userModel = new \Model\User;
        $userModel->unban($id); // Call the unban method in the User model
        redirect('user/banned'); // Redirect back to the banned users list
    }       
  

}
?>
