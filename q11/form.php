<?php
if(isset($_GET['error'])){
    session_start();
    $error = "You have incorrect username or password<br>Remaining chances is ".$_SESSION['chance']+1;
}

?>

<html>
<body>
    <form action="main.php" method="post">
        Username <input type="text" name="uname"><br>
        Password <input type="text" name="pass"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>    
    <?php
        if(isset($error)){
            echo $error;
        }

    ?>
</body>
</html>