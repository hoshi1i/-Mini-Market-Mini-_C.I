<?php namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\MCruddata;
class Cruddata extends BaseController
{
    public function index()
    {
        $model = new MCruddata();
        $data['db_login'] = $model->getLogin();
        $data['content'] = 'cruddata/index_cruddata';
        $data['title'] = 'login';
        return view('templates/index_body', $data );
    }

}