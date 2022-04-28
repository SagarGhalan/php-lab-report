<html>
    <body>
        <form action="#" method="get">
            <input type="text" name="fname" placeholder="First Name"><br>
            <input type="text" name="lname" placeholder="Last Name"><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
if(isset($_GET['fname']) && isset($_GET['lname']))
{
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];

    $i=5;

    while($i>0)
    {
        echo $fname."<br>";
        $i--;
    }
    for($i=1;$i<7;$i++)
    {
        echo "<h".$i.">".$lname."</h".$i."><br>";
    }
}


?>