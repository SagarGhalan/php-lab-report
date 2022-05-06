<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $error = array();

    
    if(strlen($name)==0)
    {
        $error[] = "Name cannot be empty";
    }
    else if(strlen($email)==0)
    {
        $error[] = "E-mail cannot be empty";
    }
    else if(!preg_match("/^[a-zA-Z\d\s\._]+@[a-z\.]+\.[a-z]{2,3}$/",$email)){
        $error[] = "Invalid Email format";
    }
    else{
        $sql = "INSERT INTO crud (name,email,gender) VALUES('$name','$email','$gender')";

        if(mysqli_query($conn,$sql))
        {
            header('location:view.php');
        }
        else
        {
            echo "Error in form submission";
        }
    } 
}

?>
<html>
    <body>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Enter your Name"><br>
            <input type="email" name="email" placeholder="Enter your E-mail"><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
