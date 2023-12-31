<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = ['image_url'];

    public function product() : Returntype 
    {
        return $this->belongsTo(Product::class);
    }
}
