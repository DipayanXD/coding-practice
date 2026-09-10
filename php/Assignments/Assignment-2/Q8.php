<?php
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}



echo "factorial(4) = " . factorial(4) . "<br>";
echo "factorial(6) = " . factorial(6) . "<br>";
echo "factorial(1) = " . factorial(1);

?>