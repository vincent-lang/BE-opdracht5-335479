<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $fillable = [
        'DatumLevering',
        'Aantal',
        'DatumEerstVolgendeLevering',
    ];

    public function leveranciers()
    {
        return $this->hasMany(Leverancier::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
