<?php
$count = 10;
$i = 0;

while($i < $count)
{
    $result = $i === 0 ? 1 : 1 + $i * 3;
    echo $result, ' ';
    $i++;
}
?>