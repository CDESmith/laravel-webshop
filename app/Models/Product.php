<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Livewire\Attribute;
use Money\Currency;
use Money\Money;

class Product extends Model
{
    use HasFactory;
    protected function price(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
          get: function (int $value) {
              return new Money($value, new Currency('GBP'));
            }
        );
    }
    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function image(): HasOne
    {
        return $this->hasOne(Images::class)->ofMany('featured', 'max');
    }
    public function images(): HasMany
    {
        return $this->hasMany(Images::class);
    }
}
