<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloodtype extends Model
{
    use HasFactory;
    protected $table="blood_type";
    protected $fillable=['Blood_group'];
}
