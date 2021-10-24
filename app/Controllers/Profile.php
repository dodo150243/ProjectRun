<?php  namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Profile extends Controller{
    public function index() {
       
        $UserModel = new UserModel();

        // โชว์ All จาก id 
        $data['users'] = $UserModel->orderBy('stu_id', 'DESC')->findAll();

        // $data['users'] = $UserModel->fetch_data();
        return view('profile', $data);
    }
    public function show_edit($stu_id=null) {
        //    echo $stu_id;

            $session = session();
            $UserModel = new UserModel();
            // $data['users'] = $UserModel->orderBy('stu_id', $stu_id)->findAll();
            $data['users'] = $UserModel->where('stu_id', $stu_id)->first();
    
    
            return view('edit_profile', $data);
        }

        public function update()
        {
            $session = session();
            $id = $this->request->getVar('stu_id');
            $UserModel = new UserModel();
            $data = [
                // 'd_m_y_birth' => $this->request->getVar('d_m_y_birth'),
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
                'company_name'=> $this->request->getVar('company_name'),
            ];
            $UserModel->update($id,$data);
            $session->set($data);
            return redirect()->to('profile');
            
        
        }

    
}