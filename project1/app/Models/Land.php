<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    // public function property()
    // {
    //     return $this->belongsTo(Property::class);
    // }
    public function rent()
    {   
       
        return $this->morphMany(RentPost::class,'property');
    }

    public function sale()
    {
        return $this->morphMany(salePost::class,'property');
    }

}
