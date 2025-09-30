<?php 

function factiorial($number) {
    $result = 1;
    for ($i = $number; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}

echo factiorial(5);

?>