<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponen extends Model
{
    use HasFactory;
    protected $fillable = [
    'Nama_Component',
    'Nama_Satuan',
];

    protected $primaryKey = 'Component_id';
    protected $table = 'komponen';

    public function detailPekerjaan()
    {
        return $this->hasMany(detail_pekerjaan::class, 'Komponen');
    }

    public function historyHarga()
    {
        return $this->hasMany(history_harga_komponen::class, 'Component');
    }
}
