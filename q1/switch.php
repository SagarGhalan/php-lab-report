<?php
include 'function.php';

if(isset($_POST['submit'])){
    if(empty($_POST['op'])){
        $ch = 0;
    }
    else{
        $ch = $_POST['op'];
    }
    $str=$_POST['str'];
    switch($ch)
    {
    case"1":
        countvowel($str);
    break;
    case"2":
        checkpalindrome($str);
    break;
    default:
        echo "invalid choice";
    }
}

?>