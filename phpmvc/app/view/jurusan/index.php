<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
            <?php Flasher ::flash(); ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah  Data Jurusan
                </button>
                <h3>Daftar jurusan</h3>
                <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
        <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<ul class="list-group">
<?php foreach($data['jurusan'] as $jurusan ) : ?>
<li class="list-group-item">
<?= $jurusan['nama']; ?>
<a style="margin-right:10px;margin-left:10px;" href="<?= BASE_URL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
<a href="<?= BASE_URL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $guru['id']; ?>">ubah</a>

<?php endforeach; ?>
</ul>
</div>
        </div>
    </div>
</body>

 <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-
labelledby="judulModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="<?= BASE_URL; ?>/jurusan/tambah" method="post">
 <input type="hidden" name="id" id="id">
 <div class="form-group">
 <label for="nama">Nama</label>
 <input type="text" class="form-control" id="nama" name="nama">
 </div>

 <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-
dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Tambah Data</button>
 </div>
 </div>
 </div>
</div>
 </div>


 