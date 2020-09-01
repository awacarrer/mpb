<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengirimanBarang extends Model
{
    use softDeletes;

    protected $table = "pengiriman_barang";

    protected $fillable = [

        'tanggal_pengiriman', 'kota_asal', 'kota_tujuan', 'nama_penerima', 'organisasi_penerima', 'alamat'
    ];

    protected $hidden = [];
}
