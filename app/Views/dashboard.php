<div class="container-fluid">
    <div class="row text-center">
        <?php foreach ($brg as $barg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$barg['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?= $barg['nama_brg'] ?></h5>
                <small><?= $barg['keterangan'] ?></small><br>
                <span class="badge text-bg-primary">Rp. <?= $barg['harga'] ?></span><br>
                <?php echo anchor('dashboard/detail_barang/'.$barg['id_brg'], '<div class="btn btn-sm btn-primary">Detail </div>') ?>
                <?php echo anchor('dashboard/tambah_keranjang/'.$barg['id_brg'], '<div class="btn btn-sm btn-success">Tambah ke Keranjang </div>') ?>
                <?php echo anchor('dashboard/checkout/'.$barg['id_brg'], '<div class="btn btn-sm btn-sucess">Beli </div>') ?>
            </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>