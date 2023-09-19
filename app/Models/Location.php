<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{   protected $fillable=[
    'name'
                        ];  
public $timestamps=false;
    protected $table="location";
    use HasFactory;


    public function properties()
    {
        return $this->hasMany(Properties::class);
    }
}
