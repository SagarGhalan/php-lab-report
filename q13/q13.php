<?php  
$num = 10;  
echo "<h3>Fibonacci series</h3>";  
echo "\n";  
/* Recursive function for fibonacci series. */  
function series($num)
{  
    if($num == 0){  
        return 0;  
    }
    else if( $num == 1){  
        return 1;  
    }
    else
    {  
        return (series($num-1) + series($num-2));  
    }   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  
}  