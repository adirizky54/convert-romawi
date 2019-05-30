<?php
function konversi($input) {
    $romawi = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    $input = strtoupper($input);    
    $result = NULL;
    
    foreach ($romawi as $key => $value) {
        while (strpos($input, $key) === 0) {
            $result += $value;
            $input = substr($input, strlen($key));
        }
        while($input >= $value){
            $result .= $key;
            $input -= $value; 
        }
    }
    
    echo $result;
}

konversi("1999");
