<?php 
	session_start();

	// variable declaration
    $dep    = "";
	$topic    = "";
	$comment    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
        $dep = mysqli_real_escape_string($db, $_POST['dep']);
		$topic = mysqli_real_escape_string($db, $_POST['topic']);
		$comment = mysqli_real_escape_string($db, $_POST['comment']);
		

		// form validation: ensure that the form is correctly filled
        if (empty($dep)) { array_push($errors, "  القسم مطلوب "); }
        if (empty($topic)) { array_push($errors, "  العنوان مطلوب "); }
		if (empty($comment)) { array_push($errors, "  التفاصيل مطلوبة "); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
            
		if($dep=='كرة قدم'){
			$query = "INSERT INTO news(dep,topic,comment) 
					  VALUES('$dep','$topic','$comment')";
           
			mysqli_query($db, $query);
          array_push($errors, "  تم اضافة خبر جديد  ");
         
              $dep="";
            $topic="";
			$comment="";

        }
       else if($dep=='كرة يد'){
			$query = "INSERT INTO newsh(dep,topic,comment) 
					  VALUES('$dep','$topic','$comment')";
           
			mysqli_query($db, $query);
          array_push($errors, "  تم اضافة خبر جديد  ");
         
              $dep="";
            $topic="";
			$comment="";

        }
       
        elseif($dep=='كرة سلة'){
			$query = "INSERT INTO newsbin(dep,topic,comment) 
					  VALUES('$dep','$topic','$comment')";
           
			mysqli_query($db, $query);
          array_push($errors, "  تم اضافة خبر جديد  ");
         
              $dep="";
            $topic="";
			$comment="";

        }
       else{
			$query = "INSERT INTO newsother(dep,topic,comment) 
					  VALUES('$dep','$topic','$comment')";
           
			mysqli_query($db, $query);
          array_push($errors, "  تم اضافة خبر جديد  ");
         
              $dep="";
            $topic="";
			$comment="";

        }
       
       
    }

	}


              
                                 

?>