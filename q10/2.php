<?php
session_start();
if(isset($_POST['mobile']))
{
    if($_POST['mobile'] == 'samsung')
    {
        $_SESSION['mprice']=10000;
        $_SESSION['mname']=$_POST['mobile'];
    }
    if($_POST['mobile'] =='micromax')
    {
        $_SESSION['mprice']=12000;
        $_SESSION['mname']=$_POST['mobile'];
    }
    if($_POST['mobile'] =='apple')
    {
        $_SESSION['mprice']=15000;
        $_SESSION['mname']=$_POST['mobile'];
    }
}
?>
<html>
<body>
<h3>General Store</h3>
<form method ="post" action="#">
<table border="1">
<tr>
<td><input type="radio" name="mobile" value="samsung"><b>Samsung</b></td>
<td><b>price:10000</b></td>
</tr>
<tr>
<td><input type="radio" name="mobile" value="micromax"><b>Micromax</b></td>
<td><b>price:12000</b></td>
</tr>
<tr>
<td><input type="radio" name="mobile" value="apple"><b>Apple</b></td>
<td><b>price:15000</b></td>
</tr>
<tr><td colspan="2"><center><input type="submit" name="submit" value="Purchase"></center></td></tr>
</table>
</form>
<?php
    if(isset($_SESSION['mname'])){
        echo"The amount is:".$_SESSION['bprice']+$_SESSION['mprice']."<br><br>";
    }
?>
page:
<table>
    <tr>
        <td><a href="1.php">1</a></td>
        <td><a href="#">2</a></td>
        <td><a href="3.php">3</a></td>
    </tr>
</table>

</body>
</html>

