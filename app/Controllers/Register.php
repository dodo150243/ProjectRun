<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Register extends Controller
{
    public function __construct()
    {
        helper("form");
    }


    public function index()
    {
        // include helper form
        // helper(['form']);
        $data = [];
        $rules = [
            'stu_id' => [
                'rules' => 'required|is_unique[stu_data.stu_id]|min_length[9]|max_length[9]|numeric',
                'errors' => [
                    'required' => 'กรุณากรอกรหัสนักสึกษา',
                    'is_unique' => 'รหัสนักศึกษาถูกใช้งานแล้ว',
                    'numeric' => 'กรุณากรอกเป็นตัวเลข',
                    'min_length' => 'กรุณากรอกรหัสนักศึกษา 6 หลัก',
                    'max_length' => 'กรุณากรอกรหัสนักศึกษา 6 หลัก',
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
            'name_prefix' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*คำนำหน้า',
                    
                ],
            ],
            'FName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*ชื่อ',
                    
                ],
            ],
            'LName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*นามสกุล',
                    
                ],
            ],
            'FName_eng' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*ชื่อ',
                    
                ],
            ],
            'LName_eng' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*นามสกุล',
                    
                ],
            ],
            'id_cardnumber' => [
                'rules' => 'required|is_unique[stu_data.id_cardnumber]|numeric|min_length[13]|max_length[13]',
                'errors' => [
                    'required' => 'กรุณากรอกเลขบัตรประชาชน',
                    'is_unique' => 'เลขบัตรประชาชนถูกใช้งานแล้ว',
                    'numeric' => 'กรุณากรอกเป็นตัวเลข',
                    'min_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
                    'max_length' => 'กรุณาเลขบัตรประชาชน 13 หลัก',
                ],
            ],
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' *กรุณาเลือกเพศ',
                    
                ],
            ],
            'faculty' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณาเลือกคณะ',
                    
                ],
            ],
            'major' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกสาขา',
                    
                ],
            ],
            'section' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกหมู่เรียน',
                    
                ],
            ],
            'edu_level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณาเลือกวุฒิการศึกษา',
                    
                ],
            ],
            'first_year' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'กรุณากรอกปีที่เข้าศึกษา',
                    'numeric' => 'กรุณาปีเป็นตัวเลข'
                ],
            ],
    
            'd_m_y_birth' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกวันเกิด',
                ],
            ],
            'province_birth' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกจังหวัดที่เกิด',
                ],
            ],
            'nationality' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*สัญชาติ',
                ],
            ],
            'religion' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*ศาสนา',
                ],
            ],
            'blood_type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*กรุ๊ปเลือด',
                ],
            ],
            'Address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกบ้านเลขที่ และ หมู่',
                ],
            ],
            'SubDistrict' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณากรอกที่อยู่ตำบล',
                ],
            ],
            'District' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*อำเภอ',
                ],
            ],
            'Province' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*จังหวัด',
                ],
            ],
            'Zipcode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '*รหัสไปรษณีย์',
                ],
            ],
            'phone_number' => [
                'rules' => 'required|min_length[10]|max_length[10]|numeric',
                'errors' => [
                    'required' => 'กรุณากรอกเบอร์โทรติดต่อ',
                    'min_length' => 'กรุณากรอกเบอร์โทรติดต่อ 10 หลัก',
                    'max_length' => 'กรุณากรอกเบอร์โทรติดต่อ 10 หลัก',
                    'numeric' => 'กรุณากรอกเป็นตัวเลข'
                ],
            ],
           
        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $model = new UserModel();
                $data = [
                    'user_id' => "",
                    'stu_id' => $this->request->getVar('stu_id'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'name_prefix' => $this->request->getVar('name_prefix'),
                    'FName' => $this->request->getVar('FName'),
                    'LName' => $this->request->getVar('LName'),
                    'FName_eng' => $this->request->getVar('FName_eng'),
                    'LName_eng' => $this->request->getVar('LName_eng'),
                    'id_cardnumber' => $this->request->getVar('id_cardnumber'),
                    'sex' => $this->request->getVar('sex'),
                    'faculty' => $this->request->getVar('faculty'),
                    'major' => $this->request->getVar('major'),
                    'section' => $this->request->getVar('section'),
                    'edu_level' => $this->request->getVar('edu_level'),
                    'first_year' => $this->request->getVar('first_year'),
                    'd_m_y_birth' => $this->request->getVar('d_m_y_birth'),
                    'province_birth' => $this->request->getVar('province_birth'),
                    'nationality' => $this->request->getVar('nationality'),
                    'religion' => $this->request->getVar('religion'),
                    'blood_type' => $this->request->getVar('blood_type'),
                    'Address' => $this->request->getVar('Address'),
                    'SubDistrict' => $this->request->getVar('SubDistrict'),
                    'District' => $this->request->getVar('District'),
                    'Province' => $this->request->getVar('Province'),
                    'Zipcode' => $this->request->getVar('Zipcode'),
                    'phone_number' => $this->request->getVar('phone_number'),
                    'status_work'=> $this->request->getVar('status_work'),
                    'company_name'=> $this->request->getVar('company_name')
                ];

                $model->save($data);
                // echo "seve";
                   return redirect()->to('/login');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('register', $data);
    }
}