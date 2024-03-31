<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Charateristic;

class Trash extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function characteristics() {
        return $this->hasMany(Charateristic::class);
    }

    public function transactions() {
        return $this->belongsTo(Transaction::class);
    }
}
