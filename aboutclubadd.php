<?php include('serveraboutclub.php') ?>	
<!DOCTYPE html>
<html>
<head>
	<title> عن النادي</title>
	<link rel="stylesheet" type="text/css" href="stylewin.css">
</head>
<body>
	<div class="header">
		<h2>معلومات النادي</h2>
	</div>
	
	<form method="post" action="aboutclubadd.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
			<label>  اسم النادي  </label>
			<input type="text" name="clubname" value="<?php echo $clubname; ?>">
        <div class="input-group">
			<label>  العنوان   </label>
			<input type="text" name="address" value="<?php echo $address; ?>">
        <div class="input-group">
			<label>البريد الالكتروني</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
        <div class="input-group">
			<label>رقم الهاتف </label>
			<input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>">
		<div class="input-groups">
			<label>  نبذة عن النادي</label>
			<input type="text" name="aboutclb" value="<?php echo $aboutclb; ?>">
		
		<div class="input-group">
			<button type="submit" class="btn" name="update">تحديث</button>
		</div>
		
	</form>
</body>
</html>