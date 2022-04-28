<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $lstr = $_POST['lstr'];
    $sstr = $_POST['sstr'];

    echo "The large string is :<br>".$lstr."<br>";
    echo "The small string is :<br>".$sstr."<br><br>";

    if(isset($_POST['search']))
    {
        if(strpos($lstr,$sstr)){
            echo "The first occurance is at position ".(strpos($lstr,$sstr)+1)."<br>";
        }
        if(strrpos($lstr,$sstr)){
            echo "The last occurance is at position ".(strrpos($lstr,$sstr)+1)."<br><br>";
        }
        else{
            echo "No match found<br><br>";
        }
        
        echo "The number of occurance is : ".substr_count($lstr,$sstr)."<br><br>";
        
    }
    if(isset($_POST['replace']))
    {
        $rstr = $_POST['rstr'];
        
        echo "The replace string is :<br>".$rstr."<br><br>";

        echo "<br>After replacing: <br>";

        echo str_replace($sstr,$rstr,$lstr)."<br><br>";
        
    }


}


?>
<html>
<body>
    <form action="#" method="post">
        Enter large string: <input type="text" name="lstr"><br>
        Enter small string: <input type="text" name="sstr"><br>
        <br>
        Enter the string to replace: <input type="text" name="rstr">
        <br>
        <input type="submit" name="search" value="search">
        <input type="submit" name="replace" value="replace">
    </form>    
</body>
</html>