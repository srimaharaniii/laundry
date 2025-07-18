<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    public function penyerahans()
    {
        return $this->hasOne(Penyerahan::class, 'pelanggans_id');
    }

}
