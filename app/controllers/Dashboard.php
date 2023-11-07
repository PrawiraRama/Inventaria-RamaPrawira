<?php 


class Dashboard extends Controller{
    public function index()
    {

        session_start();
        if (empty($_SESSION['status'])){
            header('location: '. BASEURL . '/login');
        } else if($_SESSION['status'] == 2){
            header('location: '.BASEURL.'/dashboard');
        }

        $data['judul'] = 'Dashboard';

        $data['user'] = $this->model('Admin_model')->getAllUser();

        $this->view('tamplates/header1', $data);
        $this->view('dashboard/index');
        $this->view('tamplates/footer');
    }

    public function addNewUser(){
        if($this->model('User_model')->addUser($_POST) > 0){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location.href = '". BASEURL ."/dashboard';
            </script>
        ";
        exit;
        }
    }
    public function a(){
    
    }
}