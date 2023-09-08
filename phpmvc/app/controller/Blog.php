<?php
class Blog Extends Controller
{
    public function index()
    {
        $data['judul'] = " Detail guru";
        $data['guru'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
        public function detail($id)
    {
        $data['judul'] = " Detail guru";
        $data['guru'] = $this->model("Blog_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }
       
        public function tambah()
        {
            if( $this->model('Blog_model')->tambahData($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahakan', 'success');
                header('Location: ' . BASE_URL . '/guru');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASE_URL . '/guru');
                exit;
            }
        }
        public function hapus($id)
        {
            if( $this->model('Blog_model')->hapusDataguru($id) > 0 ) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: ' . BASE_URL . '/guru');
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: ' . BASE_URL . '/guru');
                exit;
            }
        }
        public function getubah()
{
echo json_encode($this->model('Blog_model')->getBlogById($_POST['id']));
}
public function ubah()
{
if( $this->model('Blog_model')->ubahDataguru($_POST) > 0 ) {
Flasher::setFlash('berhasil', 'diubah', 'success');
header('Location: ' . BASE_URL . '/guru');
exit;
} else {
Flasher::setFlash('gagal', 'diubah', 'danger');
header('Location: ' . BASE_URL . '/guru');
exit;
} 
}
}
?>