<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Models;

class Make extends Model
{
    protected $fillable = ['id', 'brand_name', 'logo', 'status', 'created_at', 'updated_at'];

}
