<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{
    protected $table = 'barang'; // Nama tabel di database
    protected $primaryKey = 'id_brg';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_brg', 'keterangan', 'kategori', 'harga', 'stok', 'gambar'];

    public function tampil_data()
    {
        return $this->findAll(); 
    }

    public function getProductsByName($brg)
    {
        $builder = $this->db->table('barang');
        $builder->like('brg', $brg);
        return $builder->get()->getResult();
    }
    
}