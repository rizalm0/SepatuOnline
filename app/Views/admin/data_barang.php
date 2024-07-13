<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm "></i> Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($brg as $barg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?= $barg['nama_brg'] ?></td>
            <td><?= $barg['keterangan'] ?></td>
            <td><?= $barg['kategori'] ?></td>
            <td><?= $barg['harga'] ?></td>
            <td><?= $barg['stok'] ?></td>
            <td><a href="<?= base_url('admin/data_barang/edit/' .$barg['id_brg']) ?>" class="btn btn-sm btn-outline-secondary">Edit</a></td>
            <td><a href="<?= base_url('admin/data_barang/delete/' .$barg['id_brg']) ?>" class="btn btn-sm btn-outline-danger">Delete</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah'?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>