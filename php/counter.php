<?php
function counter($a)
{
    $rez=0;
    foreach ($a as  $item) $rez++;
    return $rez;
}