<?php

$uploadOk = 0;

if(isset($_POST['schemes_submit'])) {
    $db = mysqli_connect('localhost', 'root', '', 'agrodeal');
    $scheme_title = $_POST['scheme-title'];
    $scheme_desc = $_POST['scheme-desc'];
    $file=$_FILES["scheme-file"]["name"];
    $temp_name=$_FILES["scheme-file"]["tmp_name"];
    $path="path/".$file;
    move_uploaded_file($temp_name,$path);

    // mysqli_query($db,"insert into products (image)value('$file')");
	
	 if($scheme_title!="" && $scheme_desc!="" &&  $file!="") 
		{

  		  $sql= "INSERT INTO schemes (scheme_title, scheme_desc, scheme_doc) 
    		  VALUES('$scheme_title','$scheme_desc','$path')";
		}
   
   
    if(mysqli_query($db, $sql))
    {
        $uploadOk = 1;
	header("Location:index.php?uploadsuccess!")
    }
    else {
        exit();
    }

}


//header('location: index.php');
?>
')";

    
    if(mysqli_query($db, $sql))
    {
        $uploadOk = 1;
    }
    else {
        exit();
    }

}


//header('location: index.php');
?>
