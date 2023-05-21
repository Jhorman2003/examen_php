<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;
    protected $table = 'tb_registros';
    public $timestamps = false;
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }
}
