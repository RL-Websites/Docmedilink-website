<?php

namespace App\Helpers;

use Carbon\Carbon;

class SystemHelper
{

    public static function formatDate($date)
    {
        return $date ? Carbon::parse($date)->format('F j, Y h:i A') : '';

    }
}
