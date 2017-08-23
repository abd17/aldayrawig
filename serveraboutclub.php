<?php 
	session_start();

	// variable declaration
	$clubname    = "";
    $address    = "";
    $email    = "";
    $phonenumber    = "";
	$aboutclb    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['update'])) {
		// receive all input values from the form
		
		$clubname = mysqli_real_escape_string($db, $_POST['clubname']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
        $aboutclb = mysqli_real_escape_string($db, $_POST['aboutclb']);
		

		// form validation: ensure that the form is correctly filled
		//if (empty($clubname)) { array_push($errors, " اسم النادي مطلوب   "); }
        //if (empty($address)) { array_push($errors, " العنوان مطلوب   "); }
        //if (empty($email)) { array_push($errors, " الايميل مطلوب   "); }
        //if (empty($phonenumber)) { array_push($errors, " رقم الهاتف مطلوب   "); }
        //if (empty($aboutclb)) { array_push($errors, " مطلوب نبذة عن النادي   "); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query="UPDATE aboutclub SET clubname='$clubname'";
			$query1="UPDATE aboutclub SET address='$address'";
            $query2="UPDATE aboutclub SET email='$email'";
            $query3="UPDATE aboutclub SET phonenumber='$phonenumber'";
            $query4="UPDATE aboutclub SET aboutclb='$aboutclb'";
           
			mysqli_query($db, $query );
            mysqli_query($db, $query1); 
            mysqli_query($db, $query2); 
            mysqli_query($db, $query3); 
            mysqli_query($db, $query4);
            
          
             array_push($errors, " تم التحديث   ");
			$clubname="";
            $address="";
            $email="";
            $phonenumber="";
            $aboutclb="";

           
           
           
		}

	}


              
                                 

?>