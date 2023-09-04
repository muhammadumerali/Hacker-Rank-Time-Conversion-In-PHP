<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here

    $parts = explode(':', $s);
    $hours = intval($parts[0]);
    $minutes = intval($parts[1]);
    $seconds = intval(substr($parts[2], 0, 2));

    $amPm = substr($s, -2);

    if ($amPm === 'PM' && $hours != 12) {
        $hours += 12;
    } elseif ($amPm === 'AM' && $hours == 12) {
        $hours = 0;
    }

    $formattedHours = str_pad($hours, 2, '0', STR_PAD_LEFT);
    $formattedMinutes = str_pad($minutes, 2, '0', STR_PAD_LEFT);
    $formattedSeconds = str_pad($seconds, 2, '0', STR_PAD_LEFT);
    
    return "$formattedHours:$formattedMinutes:$formattedSeconds";
}
$s = '12:00:00AM';
$result = timeConversion($s);

