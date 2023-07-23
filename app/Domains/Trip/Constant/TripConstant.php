<?php

namespace App\Domains\Trip\Constant;

class TripConstant
{
    public static array $TRIP_STATUS_CONSTANTS = [
        'PENDING' => 'PENDING',
        'ASSIGNED' => 'ASSIGNED',
        'REJECTED' => 'REJECTED',
        'PICKED' => 'PICKED',
        'GET_CONSIGNMENT' => 'GET_CONSIGNMENT',
        'DRIVE_TO_DESTINATION' => 'DRIVE_TO_DESTINATION',
        'DELIVER_TO_DESTINATION' => 'DELIVER_TO_DESTINATION'
    ];
}
