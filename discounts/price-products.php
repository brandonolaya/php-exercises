<?php

$products = (int)$_REQUEST["count"];

$form = "<form action=discount.php>";

for ($i=0; $i < $products; $i++) { 

    $form .= "The product " . "<input type='text' name='product".$i."'> "
    . " cost: " . 
    "<input type='number' name='price".$i."'><br><br>";
}
$button = "<button type='submit'>Send</button>";
$close_form = "</form>";

echo $form . $button . $close_form;
?> 