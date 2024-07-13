<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'user'; // Nama tabel di database
    protected $primaryKey = 'id_user';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['username', 'password'];
}