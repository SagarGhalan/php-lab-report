<html>
<body>
    <h3>Search Array</h3>
    <form action="#" method="post">
        <input type="text" name="in" placeholder="Enter the value to search">
        <input type="submit" value="Search">
    </form>
</body>
</html>
<?php
$input = $_POST['in'];
$array = array(0,1,2,3,4,5);

if($p=array_search($input,$array))
{
    echo "The searched element is in ".$p." position";
}
else
{
    echo "Element not found";
}


?>