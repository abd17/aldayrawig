<?php include('serverjoin.php') ?>
<?php 

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>نادي ديالى الرياضي</title>
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
                     <a class="orb" href=""><img src="img/logo.png" />  نادي ديالى الرياضي</a> 
                   </div>
                 
                     <div class="col-md-4 column search">
                         <form>
                          <span class="search-icon"></span>   
                         <input type="text" name="search" />
                         <input type="submit" name="submit" value="بحث" />    
                         </form>
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
                          <h3>اخر الاخبار</h3>
                   </div>
                                 <div class="col-md-7 column marquee">
                         <marquee>
                         <a href="#">
                          <?php
                        $id="SELECT COUNT(*) FROM news";
                       $query= "select * from news where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                             
                         
                         </a>
                             
                         </marquee>
                                     
                       
                   </div>


                    <div class="col-md-3 column social">
                        <ul>
                        <li><a href="https://www.facebook.com/abdu.alfadel"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCOrta2eQr-J-aFNzHDaRqTg"></a></li>   
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
					<img src="imgnews/slide1.jpg" alt="" />
					<figcaption>
                   <?php
                        $id="SELECT COUNT(*) FROM news";
                       $query= "select * from news where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                    </figcaption>
				</figure><!--
				--><figure>
					<img src="imgnews/slide2.jpg" alt="" />
					<figcaption>
                    <?php
                        $id="SELECT COUNT(*) FROM newsh";
                       $query= "select * from newsh where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                    </figcaption>
				</figure><!--
				--><figure>
					<img src="imgnews/slide3.jpg" alt="" />
					<figcaption>
                    <?php
                        $id="SELECT COUNT(*) FROM newsbin";
                       $query= "select * from newsbin where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                    </figcaption>
				</figure><!--
				--><figure>
					<img src="imgnews/slide4.jpg" alt="" />
					<figcaption>
                     <?php
                        $id="SELECT COUNT(*) FROM newsother";
                       $query= "select * from newsother where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                    </figcaption>
                </figure><!--
				--><figure>
					<img src="imgnews/slide5.jpg" alt="" />
					<figcaption>
                     <?php
                        $id="SELECT COUNT(*) FROM news";
                       $query= "select * from news where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                    </figcaption>
				
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
                        <a href="about.php">عن النادي</a>
                     </li>
    
                     <li>
                        <a href="contact.php">اتصل بنا</a>
                     </li>
          
                     <li>
                        <a href="#">الاقسام</a>
                          <div id="drop-list">
                     <div class="drop-list"><a href="categoryfootball.php">كرة القدم</a></div>
                     <div class="drop-list"><a href="categoryhand.php">كرة اليد</a></div>
                     <div class="drop-list"><a href="categorybin.php">كرة السلة</a></div>
                     <div class="drop-list"><a href="categoryother.php">رياضات اخرى </a></div>
                     </div><!--drop-list--> 
                     </li>
                  </ul>
            </div>
		
	</div>
       <div class="center">

       <div class="row">
            <div class="col-md-4 box3-container">

           <div class="box3">
              <h3><span></span>القائمة البريدية</h3>
               <p>أدخل بريدك الإلكترونى ليصلك جديد الاخبار</p>
               <form method="post" action="index1.php">
             <?php include('errors.php'); ?>
                 <input type="email" name="email" value="<?php echo $email; ?>">
                   <input type="submit" name="submit" value="اشتراك" /> 
                  
               </form>
               </div>
       </div> 
  <div class="col-md-4 box3-container">
           <div class="box3">
               <h3><span></span><a href="imageview.php">معرض الصور</a></h3>

                       	    <ul class="pgwSlider">
                <li><img src="img/img1.jpg" />
                    
                    </li>
                <li><img src="img/img2.jpg" />
                    
                    </li>
         <li><img src="img/img1.jpg" />
                   
                    </li>
                <li>
		    <a href="http://www.nyc.gov" target="_blank">
<img src="img/img3.jpg" />
              

		    </a>
                </li>
                    <div style="clear:both;"></div>
            </ul>
               
               
           </div>
               </div>
                          
                          
 <div class="col-md-4 box3-container">

           <div class="box3">
           <h3><span></span><a href="vedioview.php">معرض الفيديو</a></h3>
             
               

                       	    <ul class="pgwSlider">
                 <li><img src="img/img1.jpg" />
                    
                    </li>
                <li><img src="img/img2.jpg" />
                    
                    </li>
         <li><img src="img/img1.jpg" />
                   
                    </li>
                <li>
		    <a href="http://www.google.com" target="_blank">
<img src="img/img3.jpg" />

		    </a>
                </li>
                    <div style="clear:both;"></div>
            </ul>
               
               
           </div>
               </div>

        </div>

      
           <div class="row works">
               <div class="small-header">
               <h3><a href="categorywins.php">الانجازات</a></h3>
                   <div class="border"></div>
                   <img src="img/balls.png" />
               </div>
                <div class="col-md-12 block-row">
                <div class="col-md-6">
               <div class="block">
                   <div class="outer-img">
                   <img src="img/hd-football-pictureshd-football-background-hd-wallpapers-5k1gmfwd-728x455.jpg" />
                   </div>
                   <div class="details">
                       <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM wins";
                       $query= "select * from wins where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                       </h3>
                     <a href="win.php">المزيد</a>
                   </div>
               </div>
                </div> 
                                    <div class="col-md-6">
               <div class="block">
                   <div class="outer-img">
                   <img src="img/hd-football-pictureshd-football-background-hd-wallpapers-5k1gmfwd-728x455.jpg" />
                   </div>
                   <div class="details">
                         <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM wins";
                       $query= "select * from wins where id=($id)-(1)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?></h3>
                      <a href="win1.php">المزيد</a>
                   </div>
               </div>
                </div> 
                    
                    </div> 
                               <div class="col-md-12 block-row">
                <div class="col-md-6">
               <div class="block">
                   <div class="outer-img">
                   <img src="img/hd-football-pictureshd-football-background-hd-wallpapers-5k1gmfwd-728x455.jpg" />
                   </div>
                   <div class="details">
                       <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM wins";
                       $query= "select * from wins where id=($id)-(2)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?></h3>
                      <a href="win2.php">المزيد</a>
                   </div>
               </div>
                </div> 
                                    <div class="col-md-6">
               <div class="block">
                   <div class="outer-img">
                   <img src="img/hd-football-pictureshd-football-background-hd-wallpapers-5k1gmfwd-728x455.jpg" />
                   </div>
                   <div class="details">
                        <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM wins";
                       $query= "select * from wins where id=($id)-(3)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?></h3>
                      <a href="win3.php">المزيد</a>
                   </div>
               </div>
                </div> 
                    
                    </div> 
           </div>
           
           
                      <div class="row articles">
               <div class="small-header">
               <h3><a href="categorymagaz.php?">مقالات</a></h3>
                
                   <div class="border"></div>
                   <img src="img/balls.png" />
               </div>
                <div class="col-md-12 block-row">
                                                              <div class="col-md-6">

                                                
                                                                  
                                                                 
              
  </div>
           
                <div class="col-md-6">
               <div class="block">
                   <div class="outer-img">
                   <img src="img/img2.jpg" />
                   </div>
                   <div class="details">
                       <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                       </h3>
                      <a href="magaz1.php?m=1">المزيد</a>
                   </div>
               </div>
                            <div class="block">
                   <div class="outer-img">
                   <img src="img/img2.jpg" />
                   </div>
                   <div class="details">
                       <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)-(1)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                       </h3>
                      <a href="magaz1.php?m=2">المزيد</a>
                   </div>
               </div>
                            <div class="block">
                   <div class="outer-img">
                   <img src="img/img2.jpg" />
                   </div>
                   <div class="details">
                       <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)-(2)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                       </h3>
                     <a href="magaz1.php?m=3">المزيد</a>
                   </div>
               </div>
                                   <div class="block">
                   <div class="outer-img">
                   <img src="img/img2.jpg" />
                   </div>
                   <div class="details">
                       <h3>
                        <?php
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)-(3)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }
                        ?>
                       </h3>
                      <a href="magaz1.php?m=4">المزيد</a>
                   </div>
               </div>
                </div> 
                                    

            
                    
                    </div> 
             
                          
                          
           </div>
                    <div class="row three-blocks">
                                                                                        <div class="col-md-4">
                                 <div class="inner">
                    <div class="three-blocks-header">

</div>
                                            <div class="col-md-12 says">
                                                <div class="says-loop">

                                            </div>
                                                                                                <div class="says-loop">

                                            </div>
                                                  </div>
  </div>
</div> 
 
                                        <div class="col-md-4 thebest">
                                 <div class="inner">
                    <div class="three-blocks-header">
<img src="img/shoes.png" /><h3>الاستفتاء الشهرى الخاص بأفضل لاعب هذا الشهر</h3>
</div>
                                            <div class="col-md-12 form">
                                                <form action="" method="post">
                                                    
    <div class="col-md-6">
         <div class="player">
        <input type="radio" name="a" />
             <?php
                        $id="SELECT COUNT(*) FROM player";
                       $query= "select * from player where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo ''.$row['playername'].'';
                                 
                            }
                        ?>

            
               </div>
                                                </div>
                                                    
             <div class="col-md-6">
         <div class="player">
        <input type="radio" name="b" /> 
              <?php
                        $id="SELECT COUNT(*) FROM player";
                       $query= "select * from player where id=($id)-(1)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo ''.$row['playername'].'';
                            }
                        ?>
              </div>
                                                </div>
                                                    <div class="col-md-6">
         <div class="player">
        <input type="radio" name="c" /> 
              <?php
                        $id="SELECT COUNT(*) FROM player";
                       $query= "select * from player where id=($id)-(2)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo ''.$row['playername'].'';
                            }
                        ?>
             
              </div>
                                                </div>
                                                    <div class="col-md-6">
         <div class="player">
        <input type="radio" name="d" /> 
          <?php
                        $id="SELECT COUNT(*) FROM player";
                       $query= "select * from player where id=($id)-(3)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo ''.$row['playername'].'';
                            }
                        ?>

     
         </div>

                                                </div>
           <div style="clear:both;">
               <input type="submit" name="sub" value="تصويت" />
                                                    </div>                                     
                                                </form>

                                            </div>
  </div>
</div> 
                                        <div class="col-md-4">
                                 <div class="inner">
                    <div class="three-blocks-header">
<img src="img/icon.png" /><h3>المباراة القادمة</h3>
</div>
                                     <div id="vs">
                                       
                                         <h3><li>ديالى</li></h3>
                                        
                                         <h3><?php
                        $id="SELECT COUNT(*) FROM matchtime";
                       $query= "select * from matchtime where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['club'].'</li>';
                            }
                        ?></h3>
                                       
                                      
                                     </div>
                                            <div class="col-md-12 time">
                                            <div class="col-md-4">
                                                <span>
                                                 <?php
                        $id="SELECT COUNT(*) FROM matchtime";
                       $query= "select * from matchtime where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>سنة  '.$row['year'].'</li>';
                            }
                        ?>
                                                </span> :
                                                </div>
                                                       <div class="col-md-4">
                                                <span>
                                                 <?php
                        $id="SELECT COUNT(*) FROM matchtime";
                       $query= "select * from matchtime where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>شهر '.$row['month'].'</li>';
                            }
                        ?>
                                                </span> :  
                                                </div>
                                                       <div class="col-md-4">
                                                <span>
                                                 <?php
                        $id="SELECT COUNT(*) FROM matchtime";
                       $query= "select * from matchtime where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>يوم  '.$row['day'].'</li>';
                            }
                        ?>
                                                </span> : 
                                                </div>
                                            </div>
  </div>
</div>   
</div>
         <div class="row clients">
                          <div class="small-header">
               <h3> الرعاة</h3>
                   <div class="border"></div>
                   <img src="img/balls.png" />
               </div>
             <div class="logos">
                 <div class="col-md-1">
                     <img src="img/logo1.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo2.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo1.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo2.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo1.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo2.png" />
                 
                 </div>
                 <div class="col-md-1">
                     <img src="img/logo1.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo2.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo1.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo2.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo1.png" />
                 
                 </div>
                        <div class="col-md-1">
                     <img src="img/logo2.png" />
                 
                 </div>
                 
             </div>
           </div>
           </div>
       <div id="border"></div>
      <div class="row clearfix footer">
         <div class="row clearfix copyright">

               <div class="col-md-6 column company">
                   
         
               </div>
                    <div class="col-md-6 column">
                  <p>
                     ©جميع الحقوق محفوظة لموقع <span><span id="orb">Abdullah </span>
                  </p>
               </div>
         </div>
      </div>
      </div>
   </body>
<script>

            var bottom_of_object = $('.outer').offset().top + $('.outer').outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $('.right').animate({'opacity':'1','right':'0px'},1000);
                $('.left').animate({'opacity':'1','left':'0px'},1000);
                $('.top').animate({'opacity':'1','top':'0px'},1000);
                $('.bottom').animate({'opacity':'1','bottom':'0px'},1000);
                $('.scale').animate({'width':'100%','height':'100%'},1000);
            }       
       
</script>
 <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="js/slider-js.js"></script>
       <script type="text/javascript">
$('.pgwMenu').pgwMenu();
$('a[data-goto]').click(function() { pgwjs.goTo($(this).attr('data-goto')); });
var pgwSlider=$('.pgwSlider').pgwSlider();function reloadSlider(){var newConfig={};var listPosition=$('input[name=\"listPosition\"]:checked').val();if(listPosition=='none'){newConfig.displayList=false;}else{newConfig.listPosition=listPosition;}newConfig.selectionMode=$('input[name=\"selectionMode\"]:checked').val();newConfig.transitionEffect=$('input[name=\"transitionEffect\"]:checked').val();if($('#displayControls:checked').val()=='true'){newConfig.displayControls=true;}if($('#verticalCentering:checked').val()=='true'){newConfig.verticalCentering=true;}if($('#adaptiveHeight:checked').val()=='true'){newConfig.adaptiveHeight=true;}if($('#maxHeight:checked').val()=='true'){newConfig.maxHeight=300;}pgwSlider.reload(newConfig);}$('.sliderConfig input').bind('change',function(){reloadSlider()});(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-59412371-1','auto');ga('send','pageview');
</script>
<script>
$(function(){
    $('.says-loop:gt(0)').hide();
    setInterval(function(){
      $('.says-loop:first-child').fadeOut()
         .next().fadeIn()
         .end().appendTo('.says');}, 
      3000);
});
</script>
</html>

