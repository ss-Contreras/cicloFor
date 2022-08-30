<?php

$cafe = array(
    "capuchino" => 29,
    "Americano" => 20,

);

for($i = 0; $i< 10;$i++){
    echo $i . "\n";
}

foreach ($cafe as $sub => $num){
    echo "El cafe $sub que estan en la lista son $num\n";
}

echo "\n";
?>