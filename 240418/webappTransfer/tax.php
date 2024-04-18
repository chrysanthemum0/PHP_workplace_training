<?php

    define('TAX_RATE', 1.1);

    function includeTax($price){
        $amount = $price * TAX_RATE;
        return $amount; 
    }

?>
