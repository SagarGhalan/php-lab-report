<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'function.php';
    $fnum = $_POST['fnum'];
    $snum = $_POST['snum'];
    
    if(isset($_POST['op'])){
        $ch = $_POST['op'];
    }
    else{
        $ch = 0;
    }

    switch($ch)
    {
        case 1:
            $result = add($fnum,$snum);
            break;
        case 2:
            $result = sub($fnum,$snum);
            break;
        case 3:
            $result = multiply($fnum,$snum);
            break;
        case 4:
            $result = divide($fnum,$snum);
            break;
        default:
            echo "Invalid choice!!";
            $result = 0;
            break;
    }
        
}

?>
<html>
<body>
    <form action="#" method="post">
        Enter the first number: <input type="text" name="fnum" value="<?php if(isset($fnum)){echo $fnum;}?>"><br>
        Enter the second number: <input type="text" name="snum" value="<?php if(isset($snum)){echo $snum;}?>"><br>
        <br>
        Operations:<br>
        <input type="radio" name="op" value="1">+<br>
        <input type="radio" name="op" value="2">-<br>
        <input type="radio" name="op" value="3">*<br>
        <input type="radio" name="op" value="4">/<br>

        The result is : <input type="text" value="<?php if(isset($result)){echo $result;}?>">
        <br>

        <input type="submit" name="submit" value="calculate">
    </form>
</body>
</html>