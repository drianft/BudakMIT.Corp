<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pekerjaan extends Model
{
    use HasFactory;
    protected $fillable = [
    'Job',
    'Komponen',
    'Qty',
    'Harga_Aktual',
];

    protected $table = 'detail_pekerjaan';

    public function job()
    {
        return $this->belongsTo(jobs::class, 'Job');
    }

    public function komponen()
    {
        return $this->belongsTo(Komponen::class, 'Komponen');
    }
}
