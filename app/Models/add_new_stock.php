<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_new_stock extends Model
{
    use HasFactory;
    protected $table="add_new_stocks";
    protected $fillable=['Stock_number','Blood_group','Collection_date','Expire_date','availability','In_stock','Donor_id'];
}
