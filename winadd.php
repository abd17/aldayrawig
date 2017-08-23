<?php include('serverwin.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>اضافة انجاز</title>
	<link rel="stylesheet" type="text/css" href="stylewin.css">
</head>
<body>
	<div class="header">
		<h2>اضافة انجاز</h2>
	</div>
	
	<form method="post" action="winadd.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>عنوان الانجاز</label>
			<input type="text" name="topic" value="<?php echo $topic; ?>">
		</div>
		<div class="input-groups">
			<label>التفاصيل</label>
			<input type="text" name="comment" value="<?php echo $comment; ?>">
		</div>
		<div class="input-group">
			<label>اسم الصورة</label>
			<input type="text" name="imgname" value="<?php echo $imgname; ?>">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="add">اضافة</button>
		</div>
		
	</form>
</body>
</html>