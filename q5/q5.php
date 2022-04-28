<?php

?>

<html>
    <form action='#' method='post'>
        <h3>OPERATIONS</h3>                                                                                                                    
            <input type='radio' name='op' value='1'>Display<br>
            <input type='radio' name='op' value='2'>Size<br>
            <input type="text" name="del" placeholder="Enter the position to delete"><br>
            <input type='radio' name='op' value='3'>Delete<br>
            <input type='radio' name='op' value='4'>Reverse<br>
            <input type='radio' name='op' value='5'>Traverse<br><br>
            <input type='submit' value='ok'>       
            <input type='reset' value='cancel'><br>
    </form>
</body>
</html>
<?php
    $array=array('zero'=>0,'one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);
    $ch=$_POST['op'];
    switch($ch)
    {
        case 1:
            foreach($array as $key=>$value)
            {
                    echo"key:$key&nbsp&nbspvalue:$value<br>";
            }break;
        case 2:
            echo sizeof($array);
            break;
        case 3 :
            $d = $_POST['del'];
            array_splice($array, $d, 1);
            echo "Element deleted<br>";
            print_r($array);
            break;
        case 4 :
            print_r(array_flip($array));
            break;
        case 5 :
            shuffle($array);
            print_r($array);
            break;
        default:
            echo "invlaid option";
            break;
    }

?>