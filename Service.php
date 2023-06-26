<?php

namespace Job;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        // Add other fillable attributes
    ];

    // Define the relationships with other models

    public function priceLists()
    {
        return $this->hasMany(PriceList::class);
    }

    // Add other relationships

}
