<?php 
function getYear($jumlah)
{
    $yearOfDeath = 0;
    $ageOfDeath = 1;

    $hasil = $ageOfDeath;

    for($i = 0; $i<=$jumlah - 1; $i++)
    {
        $output = $yearOfDeath + $ageOfDeath;
        $hasil = $hasil." $output";

        $yearOfDeath = $ageOfDeath;
        $ageOfDeath = $output;
    }

    return $hasil;
}

function witchFibonacci($kill)
{
    for ($i=1; $i < $kill+1 ; $i++) { 
        //echo $i;
        echo getYear($i);
        echo "<br>";
    }
}

witchFibonacci(10);
?>