<?php
class Jurusan Extends Controller
{
    public function index()
    {
        $data['judul'] = " detail jurusan";
        $data['jurusan'] = $this->model("Jurusan_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }
       
       
        public function tambah()
        {
            if( $this->model('Jurusan_model')->tambahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahakan', 'success');
                header('Location: ' . BASE_URL . '/jurusan');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASE_URL . '/jurusan');
                exit;
            }
        }
        public function hapus($id)
        {
            if( $this->model('Jurusan_model')->hapusDataJurusan($id) > 0 ) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: ' . BASE_URL . '/jurusan');
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: ' . BASE_URL . '/jurusan');
                exit;
            }
        }
        public function getubah()
{
echo json_encode($this->model('Jurusan_model')->getJurusanById($_POST['id']));
}
public function ubah()
{
if( $this->model('Jurusan_model')->ubahDataJurusan($_POST) > 0 ) {
Flasher::setFlash('berhasil', 'diubah', 'success');
header('Location: ' . BASE_URL . '/jurusan');
exit;
} else {
Flasher::setFlash('gagal', 'diubah', 'danger');
header('Location: ' . BASE_URL . '/jurusan');
exit;
} 
}
}
?>