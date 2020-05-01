<?php
    function getFactors($num) {
        $factors = [];
        for($i = 1; $i < $num; $i++) {
            if($num % $i == 0) {
                $factors[] = $i;
            }
        }
        echo count($factors);
    }
    
    getFactors ();
?>