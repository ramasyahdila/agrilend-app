<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanModal extends Model
{
    use HasFactory;

    protected $table = 'detail_pengajuan_modal';
    protected $fillable = [
        'name',
        'pekerjaan',
        'alamat',
        'poktan',
        'jumlah_pinjaman',
        'bunga',
        'jumlah_diterima',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];

}
