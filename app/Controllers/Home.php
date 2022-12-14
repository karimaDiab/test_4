<?php

namespace App\Controllers;

use App\Models\Test_model;
use Conigniter\Models;
class Home extends BaseController
{
    public function index()
    {

        $this->model = new Test_model();
        $data['res'] = $this->model->find_data(5);
        return view('test',$data);
    }

    public function add()
    {
        $this->session = \Config\Services::session();
          //  print_r('in add0'); exit;

        $data = [
            'name' => $this->request->getVar('name')
           ];
        $this->model = new Test_model();
        $resr ['res']= $this->model->insert_data($data);
      if ($resr)
        return $this->session->setFlashdata('success','add success');

       return view('test', $data); 
    }
    // public function edit()
    // {
    //     $this->session = \Config\Services::session();
    //      //   print_r('in add0'); exit;
    //     $data['user'] =['name' => $this->request->getVar('name')];
    //     $this->model = new Test_model();
    //     $resr = $this->model->edit_data($data);
    //   if ($resr)
    //     return $this->session->setFlashdata('success','edit success');

    //     return view('test' , $data); 
    // }
}
