<?php
/*
function Plus($number1,$number2)
{
    $anser = $number1+$number2;
    return $anser;
}
$total = Plus(3,2);
echo $total; 
function JugeGokaku($score1,$score2,$score3)
{
    $total=$score1+$score2+$score3;
    if ($total>=210)
    {
        echo "合格点は" . $total . "なので合格です";
    }
    else
    {
        echo "合格点は" . $total . "なので不合格です";
    }
}
JugeGokaku(100,80,50); */
function TrArea($Uline,$Height)
{
    $Area=$Uline * $Height / 2;
    return $Area;
}
echo (TrArea(10,5));