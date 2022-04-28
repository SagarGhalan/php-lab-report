<?php
session_start();
?>
<html>
    <body>
        <table border="1">
            <tr>
                <th>Item</th>
                <th>price</th>
            </tr>
            <tr>
                <?php
                 echo "<td>".$_SESSION['bname']."</td>";
                 echo "<td>".$_SESSION['bprice']."</td>";
                ?>
            </tr>
            <tr>
                <?php
                 echo "<td>".$_SESSION['mname']."</td>";
                 echo "<td>".$_SESSION['mprice']."</td>";
                ?>
            </tr>
            <tr>
                <td>Total</td>
                <td>
                    <?php
                        echo $_SESSION['bprice']+$_SESSION['mprice'];
                    ?>
                </td>
            </tr>
        </table>
        page:
        <table>
            <tr>
                <td><a href="1.php">1</a></td>
                <td><a href="2.php">2</a></td>
                <td><a href="#">3</a></td>
            </tr>
        </table>
    </body>
</html>
