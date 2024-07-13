<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">

        <div class="col">
            <div class="col-md-2">
                <img src="<?php echo base_url().'/uploads/'.$brg['gambar'] ?>" class="img-top">
            </div>
        </div>
        <div class="col-md-8">
        <table class="table">
            <tr>
                <td>Nama Produk</td>
                <td><?php echo $brg['nama_brg']; ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?php echo $brg['keterangan']; ?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><?php echo $brg['kategori']; ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>Rp <?php echo number_format($brg['harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?php echo $brg['stok']; ?> unit</td>
            </tr>
        </table>

        <?php echo anchor('dashboard/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
        </div>
        </div>

    </div>

</div>