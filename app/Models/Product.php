<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['external_code', 'name', 'description', 'price', 'discount'];

    public function additionalFields()
    {
        return $this->hasMany(AdditionalField::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
