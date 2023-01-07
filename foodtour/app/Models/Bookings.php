<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bookings extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'id_user',
        'wisata',
        'purchase_date',
        'name',
        'no_hp',
        'email',
        'jumlah',
        'total',
        'metode_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}
