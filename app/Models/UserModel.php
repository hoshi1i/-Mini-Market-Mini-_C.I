<?php

namespace App\models;
 use CodeIgniter\model;

 class UserModel extends Model 
 {
    protected $table = 'db_login';
    protected $primarykey = 'id_user';
    protected $allowedFields = ['email', 'username', 'password'];
}