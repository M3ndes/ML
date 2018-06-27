<?php

namespace Rubix\ML\Kernels\Distance;

class Euclidean implements Distance
{
    /**
     * Compute the distance between two coordinate vectors.
     *
     * @param  array  $a
     * @param  array  $b
     * @return float
     */
    public function compute(array $a, array $b) : float
    {
        $distance = 0.0;

        foreach ($a as $i => $coordinate) {
            $distance += ($coordinate - $b[$i]) ** 2;
        }

        return sqrt($distance);
    }
}