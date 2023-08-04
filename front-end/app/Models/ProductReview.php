<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductReview extends Model
{
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
    protected $fillable = ['description','email','product_id'];
}
