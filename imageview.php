<?php include('server.php') ?>
<?php 

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>معرض الصور</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
        <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/slider-style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css" />
      <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
      <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
      <!--script src="js/less-1.3.3.min.js"></script-->
      <!--append ‘#!watch’ to the browser URL, then refresh the page. -->
     
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <![endif]-->
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="img/favicon.png">
     
   </head>
   <body>
      <div class="row clearfix header">
               <div class="col-md-12 column header-top">
                   <div class="center">
                            <div class="col-md-4 column logo">
                     <a class="orb" href=""><img src="img/logo.png" /> نادي ديالى الرياضي</a> 
                   </div>
                 
                    
                          <div class="col-md-4 column lang">
                         <a href="#">AR</a>
                          <a href="#">EN</a>
                   </div>
                 
                         </div>
               </div>
                <div class="col-md-12 column header-bottom">
                   <div class="center">
                            <div class="col-md-2 column last-news ">
                          <h3>معرض الصور</h3>
                   </div>
                                 <div class="col-md-7 column marquee">
                         
                                     
                       
                   </div>


                    <div class="col-md-3 column social">
                        <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>   
                        <li><a href="#"></a></li>   
    
                        </ul>
                      
                   </div>
           
                 
                         </div>
               </div>
          
          
      </div>
<span id="sl_play" class="sl_command"></span> 
<span id="sl_pause" class="sl_command"></span> 
<span id="sl_i1" class="sl_command sl_i"></span> 
<span id="sl_i2" class="sl_command sl_i"></span> 
<span id="sl_i3" class="sl_command sl_i"></span> 
<span id="sl_i4" class="sl_command sl_i"></span>
            
	<div id="slideshow">
			<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
		<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
		<a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
		<a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
		<a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
		<a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
		<a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
		<a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
		<a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
		<a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
		

		
		<div class="container">
			<div class="c_slider"></div>
			<div class="slider">
				<figure>
					<img src="img/img1.jpg" alt="" />
					
				</figure><!--
				--><figure>
					<img src="img/img2.jpg" alt="" />
					
				</figure><!--
				--><figure>
					<img src="img/img3.jpg" alt="" />
					
				</figure><!--
				--><figure>
					<img src="img/img1.jpg" alt="" />
					
				</figure>
			</div>
		</div>
		
		<span id="timeline"></span>
		
		<ul class="dots_commands"><!--
			--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
			--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
			--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
			--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
		</ul>
          
                 <div class="row clearfix" id="bar">
                          <div id="drop">
               القائمة
            </div>
                  <ul class="nav nav-tabs">
                     <li >
                        <a href="index1.php">الرئيسية</a>
                     </li>
                     <li>
                        <a href="about.php">عن الموقع</a>
                     </li>
    
                     <li>
                        <a href="contact.php">اتصل بنا</a>
                     </li>
          
                     <li>
                        <a href="#">الاقسام</a>
                          <div id="drop-list">
                     <div class="drop-list"><a href="category.php">كرة القدم</a></div>
                     <div class="drop-list"><a href="category1.php">كرة اليد</a></div>
                     <div class="drop-list"><a href="category2.php">كرة السلة</a></div>
                     <div class="drop-list"><a href="category3.php">رياضات اخرى </a></div>
                     </div><!--drop-list--> 
                     </li>
                  </ul>
            </div>
		
	</div>