<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $sql = "SELECT * FROM tbl_data WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $value = mysqli_fetch_assoc($result);
        if($password == $value['password']){
            header ('location:success.php');
        }
        else{
            $error = "Incorrect Password";
        }
    }
    else{
        $error = "Username doesn't exists";
    }
}




?>
<html>
    <body>
        <form action="#" method="post">
            <input type="text" name="uname" placeholder="Username" value="<?php if(isset($username)){echo $username;}?>"><br>
            <input type="text" name="upass" placeholder="Password"><br>
            <input type="submit" name="submit">
        </form>
        <p>
            <?php
                if(isset($error)){
                    echo $error;
                }
            
            ?>
        </p>
    </body>    
</html>