<?php

namespace App\Models;

use CodeIgniter\Model;

class SbarangModel extends Model
{
    protected $table      = 'sbarang';
    protected $primaryKey = 'id_stok';
    protected $allowedFields = ['nama_barang', 'jumlah_barang', 'hargabarang', 'tanggal_masuk'];
}
