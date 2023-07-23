<?php

namespace App\Domains\Trip\Service;

use Illuminate\Support\Arr;

class TripLocationHelper
{
    public static function checkLocation($pointsPolygon, $longitude_x, $latitude_y)
    {
        $points_polygon = count($pointsPolygon) - 1;

        $vertices_x = Arr::map($pointsPolygon, fn($item) => $item[1]);
        $vertices_y = Arr::map($pointsPolygon, fn($item) => $item[0]);


        $i = $j = $c = 0;
        for ($i = 0, $j = $points_polygon; $i < $points_polygon; $j = $i++) {
            if ((($vertices_y[$i] > $latitude_y != ($vertices_y[$j] > $latitude_y)) &&
                ($longitude_x < ($vertices_x[$j] - $vertices_x[$i]) * ($latitude_y - $vertices_y[$i]) / ($vertices_y[$j] - $vertices_y[$i]) + $vertices_x[$i])))
                $c = !$c;
        }
        return (bool)$c;

    }
}
