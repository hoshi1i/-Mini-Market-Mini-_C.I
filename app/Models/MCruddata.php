<?php namespace App\Models;
use CodeIgniter\Model;

class MCruddata extends Model
{
    protected $table = 'db_login';
    public function getLogin($id = false)
    {
        if ($id === false){
            return $this->findAll();
        } else{
            return $this->getWhere(['id' => $id]);
        }
    } #end getteman
    
}