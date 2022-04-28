<?php
if(isset($_POST['submit']))
{
    $content= $_POST['info'];
    $text= "";
    $filename="info.txt";
    $file=fopen($filename,"w+");
    if(!$file){
        echo "Couldnt open the file";
        die();
    }
    else{
        fwrite($file,$content);

        rewind($file);
        $size=filesize($filename);
	    $text=fread($file, $size);

        //this is alternative method dont write this in copy echo readfile($filename);
    }

    fclose($file);

}
?>
<html>
<body>
<form action="" method="post">
    Write something about yourself: <br>
    <textarea name="info" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="submit">
</form>
<?php
    if(!empty($text)){
        echo '<span style="color:red">'.$text.'</span>';
    }
?>
</body>
</html>