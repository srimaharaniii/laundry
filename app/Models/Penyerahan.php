<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyerahan extends Model
{
    use HasFactory;
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggans_id');
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }


}