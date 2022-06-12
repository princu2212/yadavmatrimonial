<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrimonial extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Accessor
    public function getGenderAttribute($value)
    {
        return ucfirst($value);
    }
    // Accessor
    public function getMaritalStatusAttribute($value)
    {
        return ucfirst($value);
    }
}
