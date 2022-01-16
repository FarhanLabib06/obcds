<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commnet extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="comments";
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
