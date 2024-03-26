<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User class
 */
class User
{
    
    use Model;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $loginUniqueColumn = 'email';

    protected $allowedColumns = [
        'username',
        'email',
        'password',
        'role',
        'status',
        'is_deleted', 
    ];

    protected $onInsertValidationRules = [
        'email' => ['email', 'unique', 'required'],
        'username' => ['alpha','unique', 'required'],
        'password' => ['not_less_than_8_chars', 'required'],
    ];

    protected $onUpdateValidationRules = [
        'email' => ['email', 'unique', 'required'],
        'username' => ['alpha', 'unique', 'required'],
        'password' => ['not_less_than_8_chars', 'required'],
    ];

    public function signup($data)
    {
        if($this->validate($data))
        {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $data['date'] = date("Y-m-d H:i:s");
            $data['date_created'] = date("Y-m-d H:i:s");
            $data['role'] = 1;
            $data['status'] = 'active';
            $this->insert($data);
            redirect('login');
        }
    }

    public function login($data)
    {
        $row = $this->first([$this->loginUniqueColumn => $data[$this->loginUniqueColumn]]);
        if($row){
            if(password_verify($data['password'], $row->password))
            {
                $ses = new \Core\Session;
                $ses->auth($row);
                redirect('home');
            }else{
                $this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password";
            }
        }else{
            $this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password";
        }
    }

    public function softDelete($id, $value = 1)
    {
        $data['is_deleted'] = $value;
        $this->update($id, $data); // Soft delete user by setting is_deleted to $value
    }    
    
    public function fieldUpdate($id,$field, $value)
    {
        $data[$field] = $value;
        $this->update($id, $data); // Soft delete user by setting is_deleted to 1
    }
}
