<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;

class Manager extends Model
{
    protected $guarded=['id'];

    public function shop()
    {
        return $this->hasOne(Shop::class);
    }
}
