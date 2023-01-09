<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'no_hp',
        'email',
        'jumlah',
        'total',
        'foto',
        'tour_id',
    ];
}
