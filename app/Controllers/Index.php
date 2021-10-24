<?php  namespace App\Controllers;

use CodeIgniter\Controller;

class Index extends Controller{
    public function index() {
       
        echo view('index');
    }
}