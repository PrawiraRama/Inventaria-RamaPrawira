<?php 


class Dashboard1 extends Controller{
    public function index()
    {
        session_start();
        if (empty($_SESSION['status'])){
            header('location: '. BASEURL . '/login');
        }
        
        $data['judul'] = 'Dashboard User';
        $data['user'] = $this->model('Admin_model')->getAllAdmin();
        $this->view('tamplates/header1', $data);
        $this->view('dashboard1/index');
        $this->view('tamplates/footer');
    }
}