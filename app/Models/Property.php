<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';
    protected $fillable = [
        'property_id',
        'image_1',
        'property_title',
        'property_price',
        'discount',
        'property_tag',
        'address',
        'description',
        'lot_area',
        'home_area',
        'lot_dimensions',
        'rooms',
        'beds',
        'baths',
        'veranda/balcony',
        'year_built',
        'property_status',
        'certificate',
        'living_room',
        'garage',
        'dining_area',
        'bedroom',
        'bathroom',
        'gym_area',
        'garden',
        'parking',
        'image_2',
        'benefits',
        'link_location',
    ];
}
