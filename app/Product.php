<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'agregat';
    protected $primaryKey = 'barcode';
    protected $fillable = [
        'jumlah','total_harga','ready','onhold','delivered','packing','sent'
    ];
    public $timestamps = false;
}
