<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tours extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillable = [
        'id',
        'wisata',
        'purchase_date',
        'name',
        'no_hp',
        'email',
        'jumlah',
        'total',
        'status',
        'metode_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}
