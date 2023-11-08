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

        $data['user'] = $this->model('Admin_model')->getAllAdmin();

        $this->view('tamplates/header1', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');
    }

    public function addNewAdmin(){
        if($this->model('Admin_model')->addAdmin($_POST) > 0){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location.href = '". BASEURL ."/dashboard';
            </script>
        ";
        exit;
        }
    }
    public function delete($id_manageadmin){
        if($this->model('Admin_model')->deleteAdmin($id_manageadmin) > 0){
            echo "
                <script>
                    alert('Data berhasil dihapus');
                    window.location.href = '". BASEURL ."/dashboard';
                </script>
            ";
            exit;
        }
    }
}