<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRequest extends Model
{   use HasFactory;
    protected $table="property_request";
    protected $fillable=['id','user_id','property_id','message','response'];  
    public $timestamps=false;
       
    public function properties()
    {
        return $this->belongsTo(Properties::class,'property_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
 
}
