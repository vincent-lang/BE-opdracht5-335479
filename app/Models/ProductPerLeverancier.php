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
}
