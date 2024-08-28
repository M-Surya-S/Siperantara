<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageProperty extends Model
{
    use HasFactory;

    protected $table = 'message_property';
    protected $guarded = ['id'];
}
