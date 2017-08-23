<?php 
	session_start();

	// variable declaration
	
	$club    = "";
    $day    = "";
    $month    = "";
    $year    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['addmatch'])) {
		// receive all input values from the form
		
		$club = mysqli_real_escape_string($db, $_POST['club']);
        $day = mysqli_real_escape_string($db, $_POST['day']);
        $month = mysqli_real_escape_string($db, $_POST['month']);
        $year = mysqli_real_escape_string($db, $_POST['year']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($club)) { array_push($errors, " Empty club "); }
        if (empty($day)) { array_push($errors, " Empty day "); }
        if (empty($month)) { array_push($errors, " Empty month "); }
        if (empty($year)) { array_push($errors, " Empty year "); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO matchtime (club,day,month,year) 
					  VALUES('$club','$day','$month','$year')";
           
			mysqli_query($db, $query);
          

			$club="";
            $day="";
            $month="";
            $year="";

           
           
           
		}
         
                      
                        
                       
        

	}
    
                       
                      


?>