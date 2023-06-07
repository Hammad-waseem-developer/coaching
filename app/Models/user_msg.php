<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_msg extends Model
{
    public $table = 'user_msg';
    public $primarykey = 'user_id';
    public $incrementing = true;
    public $timestamps = false;
}
