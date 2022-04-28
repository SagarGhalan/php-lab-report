<?php
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

      $extensions= array("docx","pdf","pptx");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a docx, pdf or pptx file.";
      }
      
      if($file_size >10000000){
         $errors[]='File size cannot be more than 10 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"application/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="#" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit"/>
      </form>
      
   </body>
</html>