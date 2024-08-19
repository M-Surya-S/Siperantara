<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinAgent extends Model
{
    use HasFactory;

    protected $table = 'join_agent';
    protected $guarded = ['id'];
}
