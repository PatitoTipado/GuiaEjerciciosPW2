<?php

$iteracion= $_POST["iterar"];

for ($i = 1; $i <= $iteracion; $i++) {
    if($i % 3 ==0 &&$i % 5==0){
        echo "FIZZBUZZ";
    }
    elseif($i % 3 ==0){
        echo "fizz";
    }elseif ($i % 5==0) {
        echo "buzz";
    }else{
        echo $i;
    }
    echo "<br>";
}

?>