<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bulan()
    {
        return $this->hasMany(PembayaranSpp::class, 'bulan_dibayar');
    }
}
