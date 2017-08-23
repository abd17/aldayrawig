<?php include('servermatchtime.php') ?>	
<!DOCTYPE html>
<html>
<head>
	<title>اضافة مباراة</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>اضافة</h2>
	</div>
	
	<form method="post" action="matchtimeadd.php">
        <?php include('errors.php'); ?>
         <div class="input-group">
			<label> الخصم</label>
			<input type="text" name="club" value="<?php echo $club; ?>">
		<div class="input-group">
			<label>اليوم</label>
			<input type="text" name="day" value="<?php echo $day; ?>">
            <div class="input-group">
			<label> الشهر</label>
			<input type="text" name="month" value="<?php echo $month; ?>">
                 <div class="input-group">
			<label> السنة</label>
			<input type="text" name="year" value="<?php echo $year; ?>">
		
		<div class="input-group">
			<button type="submit" class="btn" name="addmatch">اضافة</button>
		</div>
		
	</form>
</body>
</html>