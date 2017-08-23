<?php 

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'registeration');?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>نادي ديالى الرياضى</title>
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
                     <a class="orb" href=""><img src="img/logo.png" />نادي ديالى الرياضى</a> 
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


       <div class="center">
<div class="row center page single">
    <h3 class="page-title"><img class="right-img" src="img/right.png" /><span></span>انجازات <img class="left-img" src="img/left.png" /><a href="index1.php" class="return">العودة للرئيسية</a> </h3>
    <div class="col-md-12">
   <h4>
    <?php
       
           
             if($_GET["m"]==1){
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
                            }}

                 if($_GET["m"]==2){
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
                            }}

                 if($_GET["m"]==3){
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
                            }}

                 if($_GET["m"]==4){
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
                            }}
                        ?>
      
   
   </h4>
        <img class="single-img" src="img/football_players_sport_fight_ultra_3840x2160_hd-wallpaper-185971.jpg"/>
    <p>
 <?php
     
 if($_GET["m"]==1){
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['comment'].'</li>';
                            }}
     if($_GET["m"]==2){
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)-(1)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['comment'].'</li>';
                            }}
                             if($_GET["m"]==3){
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)-(2)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['comment'].'</li>';
                            }}
                             if($_GET["m"]==4){
                        $id="SELECT COUNT(*) FROM magaz";
                       $query= "select * from magaz where id=($id)-(3)";
                        $result=mysqli_query($db,$query);
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['comment'].'</li>';
                            }}
                        ?>

    </p>
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

