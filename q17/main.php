<?php
	if(!isset($_POST["submit"])){
		$id=0;
		header("Location: http://localhost/scriptinglab/php/q17/form.php?id=$id");

	}
	elseif(isset($_POST["submit"])){
		$id = $_POST["id"];
		if($id<=2){
			$name = $_POST["name"];
			$roll = $_POST["roll"];
			$mark = $_POST["mark"];
			$myfile = fopen("student.txt", "a") or die("Unable to open file");
			$txt = "$name \t\t\t $roll \t\t\t $mark\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			if($id>=2){
				$myfile = fopen("student.txt", "r") or die("unable to open file");
				echo "NAME ROLL mark";
				while(!feof($myfile)){
					echo "<br>".fgets($myfile);
				}
				fclose($myfile);


			}else{
				header("Location: http://localhost/scriptinglab/php/q17/form.php?id=$id");
			}
		}
		
	}