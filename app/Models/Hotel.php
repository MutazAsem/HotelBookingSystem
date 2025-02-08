<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $fillable = [
        'name','location','description','number_of_rooms','image','email','phone',
    ];

    public function room ():HasMany
    {
        return $this->hasMany(Room::class,'hotel_id');
    }
}