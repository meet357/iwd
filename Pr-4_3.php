Pr-4_3

<?php 
 $n = 10; // number of terms to generate 
 $i = 0; 
 $j = 1; 
  
 echo "FIBONACCI SERIES:- "; 
  
 while ($n > 0) { 
        echo $i . " "; 
  
        $sum = $i + $j; 
        $i = $j; 
        $j = $sum; 
  
        $n--; 
 } 
 ?>