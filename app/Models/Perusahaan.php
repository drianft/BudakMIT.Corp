<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';

    protected $fillable = [
    'Nama_Perusahaan',
    'Alamat_Perusahaan',
    'No_Telp_Perusahaan',
    'email_Perusahaan',
    ];

    protected $primaryKey = 'Company_id';

    public function suratPenawaran()
    {
        return $this->hasMany(SuratPenawaran::class, 'Company');
    }

    public function jobs()
    {
        return $this->hasMany(jobs::class, 'Company_id');
    }
}
