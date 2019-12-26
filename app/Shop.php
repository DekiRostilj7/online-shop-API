<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function manager()
    {
        return $this->belongsTo(Manager::class, 'manager_id');
}
}