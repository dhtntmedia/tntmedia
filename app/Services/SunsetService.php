<?php

namespace App\Services;

class SunsetService
{
    public function getSunSet()
    {
        $sunRiseSet = [
            'sunrise' => date_sunrise(time(), SUNFUNCS_RET_STRING, 22.34, 88.24, 90.5546, 5.50),
            'sunset' => date_sunset(time(), SUNFUNCS_RET_STRING, 22.34, 88.24, 90.5546, 5.50),
            'time' => time(),
        ];

        $message = '';

        if (date("H:i") >= $sunRiseSet['sunset'] ||
            date("H:i") <= $sunRiseSet['sunrise']) {
            $message = 'night';
        } else {
            $message = 'day';
        }

        return $message;
    }
}