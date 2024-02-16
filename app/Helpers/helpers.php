<?php


use Carbon\Carbon;

if (!function_exists('calculateHours')) {
    function calculateHours($created_at)
    {
        $created = new Carbon($created_at);
        $now = Carbon::now();
        $hours = $now->diffInHours($created);
        // return $hours;
        if($hours==0){
            return $now->diffInMinutes($created). "min ago";
        }else{
            return $hours." hr ago";
        }

    }
}
