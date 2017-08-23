<?php include('server1.php') ?>	
<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
	<link rel="stylesheet" type="text/css" href="stylewin.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="news.php">
        <?php include('errors.php'); ?>
        <div class="input-group">

			<label>القسم</label>
			<input type="text" name="dep" value="<?php echo $dep; ?>">
        <div class="input-group">
			<label> عنوان الخبر </label>
			<input type="text" name="topic" value="<?php echo $topic; ?>">

		<div class="input-groups">
			<label>  التفاصيل</label>
			<input type="text" name="comment" value="<?php echo $comment; ?>">
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">اضافة</button>
		</div>
		
	</form>
</body>
</html>