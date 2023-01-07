<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'id_user',
        'name',
        'no_hp',
        'alamat',
        'menu',
        'jumlah',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}
