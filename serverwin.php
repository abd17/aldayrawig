<?php 
	session_start();

	// variable declaration
	$topic    = "";
    $comment    = "";
	$imgname    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['add'])) {
		// receive all input values from the form
		$topic = mysqli_real_escape_string($db, $_POST['topic']);
		$comment = mysqli_real_escape_string($db, $_POST['comment']);
        $imgname = mysqli_real_escape_string($db, $_POST['imgname']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($topic)) { array_push($errors, " Empty Topic "); }
        if (empty($comment)) { array_push($errors, " Empty comment "); }
        if (empty($imgname)) { array_push($errors, " Empty image name "); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO wins (topic,comment,imgname) 
					  VALUES('$topic','$comment','$imgname')";
           
			mysqli_query($db, $query);
          

			$topic="";
            $comment="";
            $imgname="";

           
           
           
		}
         
                      
                        
                       
        

	}
    
                       
                      


?>