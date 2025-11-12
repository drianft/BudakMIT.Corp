<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagihan extends Model
{
    use HasFactory;
    protected $fillable = [
    'no_tag',
    'sp_id',
    'Status_Pembayaran',
    'Tenggat_Pembayaran',
];

    protected $table = 'tagihan';
    protected $primaryKey = 'No_Tag';

    public function suratPenawaran()
    {
        return $this->belongsTo(SuratPenawaran::class, 'No_SP');
    }
}
