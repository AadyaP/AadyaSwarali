<?php
$str="Textbooks produced by Balbharati
are also published in pdf format. ";
echo "<br>String: ".$str;
echo "<br>";
echo "<br>String Length : ".strlen($str);
echo "<br>";
echo "<br>String Word Count
: ".str_word_count($str);
echo "<br>";
echo "<br>Reverse String : ".
strrev($str);
echo "<br>";
echo "<br>Retrun position of string
search : ".strpos($str,"Balbharati");
echo "<br>";
echo "<br>Replace string :
".str_replace("Balbharati","State
Board",$str);
?>