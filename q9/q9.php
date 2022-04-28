<html>
    <body>
        <h3>Sum arbitary number of numbers</h3>
        <form action="#" method="post">
            <input type="text" name="num" placeholder="Enter the numbers">
            <input type="submit" value="Sum">
        </form>
    </body>
</html>
<?php

function sum($numbers) {
    $numbers = explode(',', $numbers);
     $sum = 0;
     foreach ($numbers as $n) {
         $sum += $n;
     }
     return $sum ;
 }

echo "The sum is ".sum($_POST['num']).".";

?>