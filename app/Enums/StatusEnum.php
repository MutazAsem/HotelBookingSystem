<?php

namespace App\Enums;

enum StatusEnum: string
{
    case AVAILABLE = 'Available';
    case BOOKED = 'Booked';
    case UNDER_MAINTENANCE = 'Under Maintenance';
}
