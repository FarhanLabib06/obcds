<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_new_stock extends Model
{
    use HasFactory;
    protected $table="add_new_stock";
    protected $fillable=['Stock_id','Blood_group','Collection_date','Expire_date','availability','In_stock','Donor_name'];
}
