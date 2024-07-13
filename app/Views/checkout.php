<!-- checkout.php -->

<h1>Checkout: <?= $barang['nama_brg']?></h1>

<form action="<?= base_url('dashboard/checkout/proses'. $barang['id_brg'])?>" method="post">
    <table>
        <tr>
            <th>Nama</th>
            <td>
            <input type="text" name="nama_cust">
            </td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>
            <input type="text" name="nama_cust">
            </td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>
            <input type="text" name="alamat">
            </td>
        </tr>
        <tr>
            <th>Total</th>
            <td>Rp <?= number_format($barang['harga'], 0, ',', '.')?></td>
        </tr>
    </table>

    <p>
        <input type="submit" value="Checkout">
    </p>
</form>
