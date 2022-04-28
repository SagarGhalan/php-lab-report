<?php
$id = $_GET['id'];

include 'conn.php';
//for displaying content from the database table
$sql = "SELECT * FROM crud WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    $value = mysqli_fetch_assoc($result);
}
//for updating the table
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE crud SET name = '$name', email = '$email', gender = '$gender' WHERE id = '$id'";

    if(mysqli_query($conn,$sql))
    {
        header('location:view.php');
    }
    else
    {
        echo "Error in Updating the record";
    }

}



?>
<html>
    <body>
        <form action="#" method="post">
            <input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
            <input type="email" name="email" value="<?php echo $value['email']; ?>"><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male" <?php if($value['gender']=='Male'){echo "checked";}?>>Male
            <input type="radio" name="gender" value="Female" <?php if($value['gender']=='Female'){echo "checked";}?>>Female<br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>