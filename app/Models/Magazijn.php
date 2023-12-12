<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    use HasFactory;

    protected $fillable = [
        'VerpakkingsEenheid',
        'AantalAanwezig',
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
