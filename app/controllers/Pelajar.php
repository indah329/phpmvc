<?php

class Pelajar extends Controller{
    public function index()
    {
        $data['judul']='Daftar Pelajar';
        $data['plj'] = $this->model('pelajar_model')->getAllPelajar();
        $this->view('templates/header', $data);
        $this->view('pelajar/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul']='Detail Pelajar';
        $data['plj'] = $this->model('pelajar_model')->getpelajarByid($id);
        $this->view('templates/header', $data);
        $this->view('pelajar/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){

        if( $this->model('Pelajar_model')->tambahDataPelajar($_POST) > 0 ) {
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location; ' . BASEURL . '/Pelajar');
            exit; 
        }  else { flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location; ' . BASEURL . '/Pelajar');
            exit; 
        }
}

    public function hapus($id){

        if( $this->model('Pelajar_model')->hapusDataPelajar($id) > 0 ) {
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location; ' . BASEURL . '/Pelajar');
            exit; 
        }  else { flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location; ' . BASEURL . '/Pelajar');
            exit; 
        }
}



   public function getubah()
   {
      echo json_encode($this->model('Pelajar_model')->getpelajarById($_POST['id']));
   }

   public function ubah()
   {
    if( $this->model('Pelajar_model')->ubahDataPelajar($_POST) > 0 ) {
        flasher::setFlash('berhasil', 'diubah ', 'success');
        header('location; ' . BASEURL . '/Pelajar');
        exit; 
    }  else { 
        flasher::setFlash('gagal', 'diubah', 'danger');
        header('location; ' . BASEURL . '/Pelajar');
        exit; 
    } 
   }

   public function cari()
   {
    $data['judul']='Daftar Pelajar';
    $data['plj'] = $this->model('pelajar_model')->cariDataPelajar();
    $this->view('templates/header', $data);
    $this->view('pelajar/index', $data);
    $this->view('templates/footer');
   }

}