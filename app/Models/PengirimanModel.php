<?php

namespace App\Models;

use CodeIgniter\Model;

class PengirimanModel extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['tanggal', 'destinasi_id', 'customer_id', 'biaya_pengiriman', 'tanggal_sampai'];

    public function countDestinations()
    {
        return $this->db
            ->table('pengiriman')
            ->select('destinasi.destinasi_name, COUNT(pengiriman.destinasi_id) as total')
            ->join('destinasi', 'destinasi.destinasi_id = pengiriman.destinasi_id', 'left')
            ->groupBy('pengiriman.destinasi_id')
            ->get()
            ->getResultArray();
    }
}
