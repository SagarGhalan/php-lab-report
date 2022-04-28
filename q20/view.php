<?php
include 'conn.php';

?>
<html>
    <body>
        <table border="1">
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <?php
            
            $sql = "SELECT * FROM crud";

            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $i=1;
                while($value = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $value['name'];?></td>
                <td><?php echo $value['email'];?></td>
                <td><?php echo $value['gender'];?></td>
                <td><a href="update.php?id=<?php echo $value['id'];?>">Update</a>||<a href="delete.php?id=<?php echo $value['id'];?>">Delete</a></td>
            </tr>
            <?php
                $i++;
                }
            }
            
            ?>
        </table>
    </body>
</html>