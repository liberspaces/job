<?php

namespace Job;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    protected $fillable = [
        'service_id',
        'price',
        // Add other fillable attributes
    ];

    // Define the relationships with other models

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Add other relationships

}
