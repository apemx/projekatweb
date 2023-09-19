<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table="properties";
    protected $fillable=['id','title','description','price','image'];  
    public $timestamps=false;
        

        public function location()
        {
            return $this->belongsTo(Location::class);
        }
        public function type()
        {
            return $this->belongsTo(Type::class);
        }
        public function propertyrequest()
        {
            return $this->hasMany(PropertyRequest::class);
        }
}
