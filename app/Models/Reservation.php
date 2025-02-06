<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id','room_id','check_in_date','check_out_date','total_price',
    ];

    public function client ():BelongsTo
    {
        return $this->belongsTo(User::class,'client_id');
    }

    public function room ():BelongsTo
    {
        return $this->belongsTo(Room::class,'room_id');
    }
}
