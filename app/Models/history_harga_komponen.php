<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_harga_komponen extends Model
{
    use HasFactory;
    protected $fillable = [
    'component_id',
    'Harga_Acuan',
    'Tanggal_Berlaku',
    'Keterangan',
];

    protected $table = 'history_harga_komponen';
    protected $primaryKey = 'CP_History_id';

    public function komponen()
    {
        return $this->belongsTo(Komponen::class, 'Component');
    }
}
