<?php 
 if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];
    $extension = strtolower(substr($name , strpos($name , '.') + 1));
	$type = $_FILES['file']['type'];
	
    if(isset($name)){
        if(!empty($name)){
				if(($extension=='jpg'||$extension=='jpeg')&& $type=='image/jpeg'){
					
				
            $location = 'uploads/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
				echo 'Please <a href = "student_register.php">Click here </a> if you have already submitted.';
            }
        }else{
			echo 'Please upload an image !!';
		}       
    }
	}	else {
        echo 'You should select a file to upload!!';
    }
}
?>



<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<input type="submit" value="submit" name="submit">
</form>