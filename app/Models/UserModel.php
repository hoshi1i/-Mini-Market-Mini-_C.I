<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model 
{
    protected $table = 'db_login';
    protected $primary_key = 'id_user';
    protected $allowedfields = ['email','password','username'];
}