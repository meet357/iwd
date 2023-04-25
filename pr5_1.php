<?php
$str="HELLO WORLD ";
$count=0;
$word=0;
for ($i=0; $i<strlen($str); $i++)
{
$count ++;
if($str[$i] === ' '){
$word ++;
}
}
echo 'lenght of string = '.$count;
echo '<br>number of words in string = '.$word;
?>