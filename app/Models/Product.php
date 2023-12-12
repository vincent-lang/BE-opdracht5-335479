<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'Barcode',
    ];

    public function productPerLeverancier()
    {
        return $this->belongsTo(ProductPerLeverancier::class);
    }

    public function productPerAllergeen()
    {
        return $this->belongsTo(ProductPerAllergeen::class);
    }

    public function magazijn()
    {
        return $this->belongsTo(Magazijn::class);
    }
}
