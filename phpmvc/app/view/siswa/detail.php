<div class="conteiner mt-5">
    <div class="card" style="width: 18rem;">
       <div class="card-body">
        <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-moted"><?= $data['siswa']['jenis_kelamin']; ?></h6>
        <p class="card-text"><?=$data['siswa']['alamat']; ?></p>
        <a href=" <?= BASE_URL; ?>/siswa" class="card-link">Kembali</a>
</div>
</div>
</div>
