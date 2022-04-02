<?php
$count = (int) $_REQUEST["count"];

for ($i=0; $i < 4; $i++) { 
    echo "The product " . $_REQUEST["product".$i] . 
    " its discounted price is " . $_REQUEST["price".$i] *0.75 . "<br>";
}

echo $count;
?>