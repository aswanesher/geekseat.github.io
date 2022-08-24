<?php 
function getVillager($count)
{
    $intA = 0;
    $intB = 1;

    $hasil = $intB;

    for($i = 0; $i<$count - 1; $i++)
    {
        $output = ($intA + $intB) + 1;
        $hasil = $hasil." $output";

        $intA = $intB;
        $intB = $output;
    }

    return $hasil;
}

function witchFibonacci($yearOfDeath, $ageOfDeath)
{
    $hasil = $yearOfDeath - $ageOfDeath;

    for ($i=1; $i < $hasil+1 ; $i++) { 
        //echo $i;
        echo getVillager($i);
        echo "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yearofdeath = $_POST["yearofdeath"];
    $ageofdeath = $_POST["ageofdeath"];

    witchFibonacci($yearofdeath,$ageofdeath);
}
?>
<br><br>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
Year of Death : <input type="text" name="yearofdeath"><br>
Age of Death : <input type="text" name="ageofdeath"><br>
<input type="submit" name="submit" value="Submit">
</form>