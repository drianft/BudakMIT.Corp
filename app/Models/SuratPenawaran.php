<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratPenawaran extends Model
{
    use HasFactory;

    protected $table = 'surat_penawaran';
    protected $primaryKey = 'no_sp'; // FIX
    public $incrementing = false; // karena no_sp bukan auto increment
    protected $keyType = 'string';

    protected $fillable = [
        'no_sp',
        'user_id',
        'Company_id',
        'Perihal',
        'Tanggal_Surat_Penawaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'Company_id'); // FIX
    }

    public function tagihan()
    {
        return $this->hasMany(Tagihan::class, 'no_sp');
    }

    public function jobs()
    {
        return $this->hasMany(jobs::class, 'no_sp'); // FIX
    }
}
