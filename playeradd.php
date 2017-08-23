<?php include('serveraddplayer.php') ?>	
<!DOCTYPE html>
<html>
<head>
	<title> اضافة لاعب</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>اضافة</h2>
	</div>
	
	<form method="post" action="playeradd.php">
        <?php include('errors.php'); ?>

		<div class="input-group">
			<label>اسم اللاعب</label>
			<input type="text" name="playername" value="<?php echo $playername; ?>">
		
		<div class="input-group">
			<button type="submit" class="btn" name="addplayer">اضافة</button>
		</div>
		
	</form>
</body>
</html>