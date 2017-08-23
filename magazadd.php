<?php include('servermagaz.php') ?>
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
	
	<form method="post" action="magazadd.php">

		<?php include('errors.php'); ?>
        <div class="input-group">
			<label> اسم الكاتب</label>
			<input type="text" name="writer" value="<?php echo $writer; ?>">
		</div>
		<div class="input-group">
			<label>عنوان المقالة</label>
			<input type="text" name="topic" value="<?php echo $topic; ?>">
		</div>
		<div class="input-groups">
			<label>التفاصيل</label>
			<input type="text" name="comment" value="<?php echo $comment; ?>">
		</div>
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="add">اضافة</button>
		</div>
		
	</form>
</body>
</html>