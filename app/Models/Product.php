<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'Barcode',
    ];

    public function productPerLeveranciers()
    {
        return $this->belongsTo(ProductPerLeverancier::class);
    }

    public function productPerAllergeens()
    {
        return $this->belongsTo(ProductPerAllergeen::class);
    }

    public function magazijns(): HasMany
    {
        return $this->hasMany(Magazijn::class);
    }
}
