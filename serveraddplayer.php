<?php 
	session_start();

	// variable declaration
	
	$playername    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['addplayer'])) {
		// receive all input values from the form
		
		$playername = mysqli_real_escape_string($db, $_POST['playername']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($playername)) { array_push($errors, " Empty player name "); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO player (playername,count) 
					  VALUES('$playername','0')";
           
			mysqli_query($db, $query);
          
            
			$playername="";

           
           
           
		}
         
                      
                        
                       
        

	}
    
                       
                      


?>