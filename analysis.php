<?php

$word = ["blue", "star", "moon", "sunny", "rain", "sky"];

for ($i=0; $i < count($word); $i++) { 
    //validate the word send with $_REQUEST
    if ($_REQUEST["word".$i] == $word[$i] ){
        echo "The word entered is correct" . "<br>";
    }
    else {
        echo "the word enters is incorrect, the word correst is: "
         . $word[$i] . "<br>"; 
    }
}

echo "<br>";

?>