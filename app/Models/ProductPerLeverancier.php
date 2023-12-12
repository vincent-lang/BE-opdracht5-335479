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

    public function leverancier()
    {
        return $this->hasMany(Leverancier::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
