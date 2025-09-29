<?php
/* $i = 1;
while($i <=20)
{
    echo $i;
    echo "<br />";
    $i += 1;
} 
$count = 0;
while($count <= 100)
{
    if ($count % 3 == 0){
        $count +=1;
        continue;
    }
    if ($count > 19){
        $count +=1;
        break;
    }
    echo $count;
    echo "<br />";
    $count += 1;
} 
$num = 0;
do
{
    echo "Num=" . $num;
    echo "<br />";
    $num++;
}while($num < 3); */
for($count=1; $count<=50; $count++)
{
    if ($count % 3==0){
        echo "Fizz";
        echo "<br />";
    } 
    if ($count % 5==0){
        echo "Buzz";
        echo "<br />";
    }
    if ($count %5==0 && $count %3 ==0){
        Echo "FizzBuzz";
        echo "<br />";
    }
    if ($count %5<>0 && $count %3<>0){
        Echo $count;
        echo "<br />";
    }
}
