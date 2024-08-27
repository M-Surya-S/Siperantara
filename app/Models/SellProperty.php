<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellProperty extends Model
{
    use HasFactory;

    protected $table = 'sell_property';
    protected $guarded = ['id'];
}
