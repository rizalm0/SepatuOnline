<?php

namespace App\Models;

use CodeIgniter\Model;

class Invoice extends Model
{
    protected $table = 'invoice'; // Nama tabel di database
    protected $primaryKey = 'id_inv';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_cut', 'alamat', 'id_brg', 'total'];

    public function createInvoice($data)
    {
    // Create a new invoice
    $this->insert($data);
    return $this->getInsertID();
    }

}

