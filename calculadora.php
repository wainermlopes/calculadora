<?php
        $a = $_POST ["num1"];
        $b = $_POST ["num2"];
        $op =$_POST ["operacao"];
        
        if($op == "+"){
            $c = $a + $b;
        }
            
        else if($op == "-"){
            $c = $a - $b;
        }
            
        else if($op == "*"){
            $c = $a*$b;
        }
           
        else
            $c = $a/$b;
         echo "O resultado da operação é: $c";
    ?>      