<?php 
	session_start();

	// variable declaration
	
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['submit'])) {
		// receive all input values from the form
		
		$email = mysqli_real_escape_string($db, $_POST['email']);
		

		// form validation: ensure that the form is correctly filled
		
		if (empty($email)) { array_push($errors, "Email is required"); }
		

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			
            $query1 = "INSERT INTO subs (email) 
					  VALUES( '$email')";
                       
			
            mysqli_query($db, $query1);

			$email="";
		}

	}

	

   
   
   

	

?>