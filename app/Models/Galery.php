<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'iduser',
        'tanggal',
        'tanggal',
        'judul',
        'deskripsi',
        'foto',
    ];
}