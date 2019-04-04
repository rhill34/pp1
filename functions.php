<?php


/**
 * Takes an array as a parameter abd prints , one item per line.
 * @param $array
 */
function printArr( $array )
{
    foreach($array as $x)
    {
        echo "$x <br>";
    }
}

/*******************************************************************/
/**
 * define a function called largest() that takes an array as a parameter
 * and returns the largest value in the array
 * @param $array
 * @return int|mixed
 */
function largest($array )
{
    $larger = 0;
    foreach ($array as $x)
    {
        $larger = ($x > $larger) ? $x : $larger;
    }
    return $larger;
}
