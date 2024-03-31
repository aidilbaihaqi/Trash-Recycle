<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'jenis_wadah',
        'warna',
        'kondisi', 
        'tips_daur_ulang'
    ];

    public function trash() {
        return $this->belongsTo(Trash::class);
    }
}
