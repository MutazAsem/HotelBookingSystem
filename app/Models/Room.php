<?php

namespace App\Models;

use App\Enums\RoomTypeEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'hotel_id','room_number','room_type','price','status'
    ];

    protected $casts = [
        'room_type' => RoomTypeEnum::class,
        'status' => StatusEnum::class,
    ];

    public function hotel ():BelongsTo
    {
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
}