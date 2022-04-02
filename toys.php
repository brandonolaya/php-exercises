<?php

function cellar($age){
    
    $werehouse = "";
  
    if ( $age < 5 ) {
        $werehouse = "The student's toy is at the bottom werehouse. \n";
   
    }
    elseif($age >= 5 && $age <= 7){
        $werehouse = "The student's toy is at the mid werehouse. \n";
    }
    elseif ($age > 7 && $age < 18) {
        $werehouse = "The student's toy is at the top werehouse. \n";
    }
    else {
        $werehouse = "The student's toy is at the next the werehouse. \n";
    }
   
    return $werehouse;
}
function tree($height){
    $space = $height - 1;
    for ($i=0; $i <= $height; $i++) { 
        $a=0;
        $b=0;
        while ($a <=$space) {
            echo " ";
            $a++;
        }
        while ($b <$i) {
            echo "* ";
            $b++;
        }
        echo "\n";
        $space--;
    }

}
do {
    
    $temp = readline("1. students's toy \n 2. tree \n ");
    switch ($temp) {
        case 1:
            echo cellar(readline("write age oft he student: "));
            break;
        case 2:
            echo tree(readline("Tree height: "));
            break;
        default:
            echo "Leeave";
            break;
    }
} while ($temp == 1);
