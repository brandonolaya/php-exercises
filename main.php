<?php
//arrays the word for the game
$word = ["blue", "star", "moon", "sunny", "rain", "sky"];
//Send data at analysis.php
$form = "<form action=analysis.php>";

for ($i=0; $i < count($word); $i++) { 
    //variable keep the word then str_shuffle mess the word
    $form .= "The word: " . str_shuffle($word[$i])
    . " " . 
    "<input type='text' name='word".$i."'><br><br>";
}
//create the button for send 
$button = "<button type='submit'>Send</button>";
$close_form = "</form>";
//crear HTML form dinamic
echo $form . $button . $close_form;


?>