<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'menu_id',
        'customer',
        'name',
        'menu',
        'jumlah',
        'total',
        'kasir',
    ];
    
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
