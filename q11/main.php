<?php

if(!isset($_POST['submit']))
{
    session_start();
    $_SESSION['chance']=2;
    header ('location:q11.php');

}
if(isset($_POST['submit']))
{
    $username = "sagar";
    $password = "1234";

    session_start();

    if(!$_SESSION['chance']==0)
    {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        if($uname == $username && $pass == $password){
            header('location:form.php');
       }
       else{
        $_SESSION['chance']--;
        header('location:successform.php?error=1');
        }
    }
    else{
        
        echo "You have incorrect username or password<br>Your chance is finished";
    }
    
}



?>