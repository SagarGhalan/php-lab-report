<?php

if(!isset($_POST['submit']))
{
    session_start();
    $_SESSION['chance']=2;
    header ('location:form.php');

}
if(isset($_POST['submit']))
{
    $username = "admin";
    $password = "1234";

    session_start();

    if(!$_SESSION['chance']==0)
    {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        if($uname == $username && $pass == $password){
            header('location:sucessform.php');
       }
       else{
        $_SESSION['chance']--;
        header('location:form.php?error=1');
        }
    }
    else{
        
        echo "You have incorrect username or password<br>Your chance is finished";
    }
    
}



?>
