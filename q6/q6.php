<?php
    $input = $_POST['input'];

    if(strrev($input)==$input){
        echo $input." is palindrome";
    }
    else{
        echo $input." is not palindrome";
    }

?>
<html>
<body>
    <h3>Check palindrome:</h3>
    <form action="#" method="post">
        <input type="text" name="input" placeholder="Enter the text"><br><br>
        <input type="submit" value="Check">
    </form>
    
</body>
</html>