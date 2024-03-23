<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * UserController class
 */
class UserController
{
    use MainController;

    public function displayUsers()
    {
        $data['user'] = new \Model\User;
        // Fetch all users using findAll() method from the User model
        $data['users'] = $data['user']->findAll(); 
        $this->view('display_users', $data);
    }

    public function addUser()
    {
        $data['user'] = new \Model\User;
        $req = new \Core\Request;
        if ($req->posted()) {
            // Call insert() method to add a new user
            $data['user']->insert($_POST);
        }
        $this->view('add_user', $data);
    }

    public function editUser($id)
    {
        $data['user'] = new \Model\User;
        $req = new \Core\Request;
        if ($req->posted()) {
            // Call update() method to edit an existing user
            $data['user']->update(base64_decode($id), $_POST);
        }
        $data['userdata'] = $data['user']->where(['id' => base64_decode($id)])->first();
        $this->view('edit_info', $data);
    }

    public function deleteUser($id)
    {
        $data['user'] = new \Model\User;
        $data['user']->delete(base64_decode($id));
        redirect('user/display');
    }
    
    public function index()
    {
        // Display users by default when accessing UserController's index method
        $this->displayUsers(); 
    }
}
?>
