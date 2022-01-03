<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloodrequest extends Model
{
    use HasFactory;
    protected $table="blood_requests";
    protected $guarded=[];
}
