<?php
/**
 * Created by PhpStorm.
 * User: d5sfn
 * Date: 05.09.18
 * Time: 10:40
 */

namespace Acme;


class AreaCalculator
{

    public function calcuLate($shapes)
    {
        $area = 0;

        foreach ($shapes as $shape)
        {
            $area[] = $shape->area();
        }

        return array_sum($area);

     }



}