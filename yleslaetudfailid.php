<?php 

	print_r($_POST["fileToUpload"]);
	print_r($_FILES);
	
	 $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

$sql= 'insert into saasma_galeriifailid values ("'.$FILES["name".'") ';
//echo $sql;

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, $sql) or
            die("Error: " . mysqli_error($l) . " -- " . $sql);
    
?>