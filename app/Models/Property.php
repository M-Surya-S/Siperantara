<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';
    protected $primaryKey = 'property_id';
    public $incrementing = false;
    protected $fillable = [
        'property_id',
        'image',
        'property_title',
        'property_price',
        'discount',
        'property_tag',
        'property_category',
        'featured',
        'address',
        'description',
        'lot_area',
        'home_area',
        'lot_dimensions',
        'rooms',
        'beds',
        'baths',
        'floors',
        'veranda_balcony',
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
        'benefits',
        'link_location',
    ];

    public static function generatePropertyId()
    {
        // Mengambil ID terakhir yang ada di database
        $lastProperty = Property::orderBy('property_id', 'desc')->first();

        // Jika tidak ada ID, set ke ID00001
        if (!$lastProperty) {
            $nextId = 'ID0001';
        } else {
            // Ambil angka dari ID terakhir
            $lastIdNumber = (int)substr($lastProperty->property_id, 2);

            // Tambahkan 1 pada angka tersebut
            $nextIdNumber = $lastIdNumber + 1;

            // Format ulang menjadi ID dengan leading zeros
            $nextId = 'ID' . str_pad($nextIdNumber, 4, '0', STR_PAD_LEFT);
        }

        return $nextId;
    }
}
