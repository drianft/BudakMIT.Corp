<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class jobs extends Model
{
    use HasFactory;
    protected $fillable = [
    'No_SP',
    'Nama_Pekerjaan',
    'Nama_Mesin',
    'Spesifikasi_Mesin',
];

    protected $primaryKey = 'Job_id';

    public function suratPenawaran()
    {
        return $this->belongsTo(SuratPenawaran::class, 'No_SP');
    }

    public function detailPekerjaan()
    {
        return $this->hasMany(detail_pekerjaan::class, 'Job');
    }
}
