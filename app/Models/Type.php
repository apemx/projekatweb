<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{   use HasFactory;
    protected $table="type";
    protected $fillable=['id','name'];  
    public $timestamps=false;
       
    public function properties()
    {
        return $this->hasMany(Properties::class);
    }
   
}
