<!DOCTYPE html> 
 <html> 
  
 <head> 
    <title>Multiplication Table</title> 
 </head> 
  
 <body> 
        <?php 
  
        $number = 9; 
        echo "<p>Multiplication table for $number:</p>"; 
  
        for ($i = 1; $i <= 10; $i++) { 
                $product= $number * $i; 
                echo "$number * $i = $product" ; 
                echo "<br>"; 
        } 
        ?> 
 </body> 
  
 </html>