<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <form action="<?= BASEURL;?>mahasiswa/cari" method="POST">
              <input type="text" class="form-control" id="keyword" name="keyword" autocomplete="off">
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#mahasiswaModal">
            Tambah Mahasiswa
            </button>

            <ul class="list-group">
            <?php foreach($data['mahasiswa'] as $mahasiswa): ?>
                <li class="list-group-item">
                    <?= $mahasiswa['nama'];?>
                    <a href="<?= BASEURL;?>Mahasiswa/getmahasiswa/<?= $mahasiswa['id'];?>" class="badge bg-primary float-right">Detail</a>
                    <a href="<?= BASEURL;?>Mahasiswa/delete/<?= $mahasiswa['id'];?>" class="badge bg-primary float-right" onclick="return confirm('Yakin ?');">Hapus</a>
                </li>
            <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mahasiswaModal" tabindex="-1" aria-labelledby="mahasiswaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mahasiswaModalLabel">Form Input Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= BASEURL;?>mahasiswa/insert" method="POST">
      <div class="modal-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>