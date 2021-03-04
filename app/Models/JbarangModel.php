<?php

namespace App\Models;

use CodeIgniter\Model;

class JbarangModel extends Model
{
    protected $table      = 'jbarang';
    protected $primaryKey = 'id_jual';
    protected $allowedFields = ['nama_barang', 'jumlah_barang', 'hargabarang', 'tanggal_keluar'];
}
