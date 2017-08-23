<?php 
	session_start();

	// variable declaration
    $writer    = "";
	$topic    = "";
    $comment    = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['add'])) {
		// receive all input values from the form
        $writer = mysqli_real_escape_string($db, $_POST['writer']);
		$topic = mysqli_real_escape_string($db, $_POST['topic']);
		$comment = mysqli_real_escape_string($db, $_POST['comment']);
        
		

		// form validation: ensure that the form is correctly filled
		if (empty($writer)) { array_push($errors, " Empty Writer "); }
        if (empty($topic)) { array_push($errors, " Empty Topic "); }
        if (empty($comment)) { array_push($errors, " Empty comment "); }
      
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO magaz (writer,topic,comment) 
					  VALUES('$writer','$topic','$comment')";
           
			mysqli_query($db, $query);
          
            $writer="";
			$topic="";
            $comment="";
            $imgname="";

           
           
           
		}
         
                      
                        
                       
        

	}
    
                       
                      


?>