<?php
    session_start();
    if(isset($_POST['submit']))
    {
        if($_POST['book'] =='java')
        {
            $_SESSION["bprice"]=100;
            $_SESSION["bname"]= 'java';
        }
        if($_POST['book'] =='cpp')
        {
            $_SESSION["bprice"]=120;
            $_SESSION["bname"]= 'cpp';
        }
        if($_POST['book'] == 'it')
        {
            $_SESSION["bprice"]=150;
            $_SESSION["bname"]= 'it';
        }
    }
?>
<html>
<head><title>Shopping Mall</title></head>
<body>
<h3>General Store</h3>
<form method ="post" action="#">
<table border="1">
    <tr>
        <td><input type="radio" name="book" value="java"><b>Java Book</b></td>
        <td><b>price:100</b></td>
    </tr>
    <tr>
        <td><input type="radio" name="book" value="cpp"><b>CPP Book</b></td>
        <td><b>price:120</b></td>
    </tr>
    <tr>
        <td><input type="radio" name="book" value="it"><b>IT Book</b></td>
        <td><b>price:150</b></td>
    </tr>
    <tr><td colspan="2"><center><input type="submit" name="submit" value="Purchase"></center></td></tr>
</table>
<br>
</form>
<?php
    if(isset($_SESSION['bname'])){
        echo"The amount is:".$_SESSION['bprice']."<br><br>";
    }
?>
page:
<table>
    <tr>
        <td><a href="#">1</a></td>
        <td><a href="2.php">2</a></td>
        <td><a href="3.php">3</a></td>
    </tr>
</table>
</body>
</html>
