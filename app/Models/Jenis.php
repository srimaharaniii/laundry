<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';

    public function penyerahans()
    {
        return $this->hasOne(Penyerahan::class, 'jenis_id');
    }
}