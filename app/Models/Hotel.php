<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name','location','description','number_of_rooms','contact_information'
    ];

    public function room ():HasMany
    {
        return $this->hasMany(Room::class,'hotel_id');
    }
}