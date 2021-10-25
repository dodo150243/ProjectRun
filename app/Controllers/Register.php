<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;
 use App\Models\CategoryModel;
  use App\Models\RegisModel;

class Register extends Controller
{
    public $member;
    public $category;
    public $regis;
    public function __construct()
    {
        $this->member = new MemberModel();
        $this->category = new CategoryModel();
         $this->regis = new RegisModel();
    }
   
    public function index() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }


    public function save()
    {
        
        helper(['form']);
        // $category = new CategoryModel();
        // $regis = new RegisModel();
        
        $data = [];
        $rules = [
            'id_card' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกเลขบัตร',
                    
                ],
            ],
            'first_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกชื่อ',
                    

                ],
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกนามสกุล',

                ],
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'กรุณากรอกรหัสผ่าน',
                    'min_length' => 'รหัสผ่านต้องมากว่า 6 ตัว',

                ],
            ],
         
            'confpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'กรุณากรอกยืนยันรหัสผ่าน',
                    'matches' => 'ไม่ผ่านไม่ตรงกัน',

                ],
            ],          
           
        ];
        // if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
               

              
                $data = [
                    'id_card' => $this->request->getVar('id_card'),
                    'first_name' => $this->request->getVar('first_name'),
                    'last_name' => $this->request->getVar('last_name'),
                    'age' => $this->request->getVar('age'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                  
                ];   
                 $this->member->insert($data);
                

                $data2 = [
                    'category_id'=> "",
                    'category_name'=> $this->request->getVar('category_name'),
                    'length'=> $this->request->getVar('length'),
                    'price'=> $this->request->getVar('price'),
                   
                   
                ];
               

                $this->category->insert($data2);
               
                
               
                return redirect()->to('/home');
             
                
            } else {
                $data['validation'] = $this->validator;
                return view('register', $data);
            }
        // }
        // return view('register', $data);
    }
}