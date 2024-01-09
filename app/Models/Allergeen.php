<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'Omschrijving',
    ];

    public function productPerAllergeens()
    {
        return $this->belongsTo(productPerAllergeen::class);
    }
}
