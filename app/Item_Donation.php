<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Donation extends Model
{
    return $this->hasMany(Item::class);
}
