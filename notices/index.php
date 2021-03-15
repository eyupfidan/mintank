<?php include '../config.php';

if($_GET["id"] != null || $_GET["id"] != "")
{
if(!is_numeric($_GET["id"]))
   {
	 echo '<script type="text/javascript">window.location="https://mintank.com/notices"</script>';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Duyurular & Etkinlikler | Mintank Bombom</title>
    <meta name="description" content="Serverimiz hakkında etkinlik ve duyuruları burada görebilirsiniz.">
    <meta name="author" content="mintank">
    <link rel="icon" type="image/png" href="https://minttank.b-cdn.net/assets/images/h1aljmE.png">
	<meta name="theme-color" content="#0cc3f1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="https://minttank.b-cdn.net/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="https://minttank.b-cdn.net/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/ionicons/css/ionicons.min.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/flickity/dist/flickity.min.css">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="https://minttank.b-cdn.net/assets/vendor/summernote/dist/summernote-bs4.css">
    <!-- GoodGames -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/css/goodgames.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/css/custom.css">   
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="https://minttank.b-cdn.net/assets/vendor/jquery/dist/jquery.min.js"></script>   
</head>
<body>
<?php include '../component/menu.php' ?>
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">

            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                     <a href="https://mintank.com" class="nk-nav-logo">
                <img src="https://minttank.b-cdn.net/assets/images/logos.png" alt="mintank" width="120">
            </a>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

		<?php 
if($_GET['id'] == "")
{
  echo '
      <div class="nk-main">      
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
     <li><a href="../index.php">Anasayfa</a></li>            
        <li><span class="fa fa-angle-right"></span></li>        
        <li><span>Duyurular & ETKİNLİKLER</span></li>        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->      
<div class="container">
    <div class="row vertical-gap">
	<div class="col-lg-8">    
			<div class="nk-gap-2"></div>';			
    $query = $baglanti->query("select * from posts order by id desc LIMIT 12");
    foreach($query as $value)
	{	
	$type = $value["type"];
	$title = $value["title"];
	$id = $value["id"];
	$imagelink= '';
	if($type=='duyuru')
	{
		$imagelink = 'https://minttank.b-cdn.net/assets/images/notices-icon.png';
	}
	else if($type=='etkinlik')		
	{
		$imagelink = 'https://minttank.b-cdn.net/assets/images/celebrate-icon.png';
	}
	else
	{
		$imagelink = 'https://minttank.b-cdn.net/assets/images/notices-icon.png';
	}
		echo '<div class="nk-team">
                <div class="nk-team-logo">
                    <img src="'.$imagelink.'" alt="'.$title.'">
                </div>
                <div class="nk-team-cont">
                    <h3 class="h4 mb-20"><span class="text-main-1">'.$type.'</span> &nbsp;'.$title.'</h3>
                   <a href="?id='.$id.'" <h4 class="h6 mb-5">DEVAMINI GÖR</h4></a>
                </div>
            </div>';
	}; 
	echo '<div class="nk-gap-2"></div>
	<div class="nk-pagination nk-pagination-center">
            <a href="#" class="nk-pagination-prev">
                <span class="ion-ios-arrow-back"></span>
            </a>
            <nav>
                <a class="nk-pagination-current" href="#">1</a>
                <a href="#">2</a>

            </nav>
            <a href="#" class="nk-pagination-next">
                <span class="ion-ios-arrow-forward"></span>
            </a>
        </div>';
	echo '</div>';
	
}

else 
{
	echo '<div class="nk-main">      
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
     <li><a href="../index.php">Anasayfa</a></li>      
        <li><span class="fa fa-angle-right"></span></li>        
        <li><a href="#">Duyurular & Etkinlikler</a></li>       
        <li><span style="display:none;" class="fa fa-angle-right"></span></li>        
        <li style="display:none;></li>   
		
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->      
<div class="container">
    <div class="row vertical-gap">
	<div class="col-lg-8">    
			<div class="nk-gap-2"></div>';
	$queryx = $baglanti->prepare("select * from posts  where id=:id");
    $queryx->bindParam(':id', $_GET["id"] , PDO::PARAM_INT);
    $queryx->execute();	
    foreach($queryx as $value)
 	{
	$type = $value["type"];
	$title = $value["title"];
	$id = $value["id"];
	$content = $value["content"];
	echo '
	<h3 class="text-main-1">'.$title.'</h3><br>
	<blockquote class="nk-blockquote">
    <div class="nk-blockquote-icon"><span>"</span></div>
    <div class="nk-blockquote-content" style="color:white;font-size:18px;">'.$content.'</div>
    <div class="nk-blockquote-author"><span>Mintank Ekibi</span></div>
</blockquote>
        </div>';
	 
	} 
}
?>
    
        <?php include '../component/sidebar.php' ?>
    </div>
</div>
<div class="nk-gap-2"></div>     
<?php include '../component/footer.php' ?>        
    </div>  
        <!-- START: Page Background -->
    <img class="nk-page-background-top" src="https://minttank.b-cdn.net/assets/images/bg-top-3.png" alt="">
    <img class="nk-page-background-bottom" src="https://minttank.b-cdn.net/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->  
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0">Search</h4>
               <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
<?php if($_SESSION["UserName"] == "")
{
	include 'component/register.php';}?>  
<!-- START: Scripts -->
<!-- Object Fit Polyfill -->
<script src="https://minttank.b-cdn.net/assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- GSAP -->
<script src="https://minttank.b-cdn.net/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<!-- Popper -->
<script src="https://minttank.b-cdn.net/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="https://minttank.b-cdn.net/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sticky Kit -->
<script src="https://minttank.b-cdn.net/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- Jarallax -->
<script src="https://minttank.b-cdn.net/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
<!-- imagesLoaded -->
<script src="https://minttank.b-cdn.net/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Flickity -->
<script src="https://minttank.b-cdn.net/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
<!-- Photoswipe -->
<script src="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<!-- Jquery Validation -->
<script src="https://minttank.b-cdn.net/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- Jquery Countdown + Moment -->
<script src="https://minttank.b-cdn.net/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/moment/min/moment.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Hammer.js -->
<script src="https://minttank.b-cdn.net/assets/vendor/hammerjs/hammer.min.js"></script>
<!-- NanoSroller -->
<script src="https://minttank.b-cdn.net/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>
<!-- SoundManager2 -->
<script src="https://minttank.b-cdn.net/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>
<!-- Seiyria Bootstrap Slider -->
<script src="https://minttank.b-cdn.net/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<!-- Summernote -->
<script src="https://minttank.b-cdn.net/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
<!-- nK Share -->
<script src="https://minttank.b-cdn.net/assets/plugins/nk-share/nk-share.js"></script>
<!-- GoodGames -->
<script src="https://minttank.b-cdn.net/assets/js/goodgames.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->
</body>
</html><?php include '../config.php';

if($_GET["id"] != null || $_GET["id"] != "")
{
if(!is_numeric($_GET["id"]))
   {
	 echo '<script type="text/javascript">window.location="https://mintank.com/notices"</script>';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Duyurular & Etkinlikler | Mintank Bombom</title>
    <meta name="description" content="Serverimiz hakkında etkinlik ve duyuruları burada görebilirsiniz.">
    <meta name="author" content="mintank">
    <link rel="icon" type="image/png" href="https://minttank.b-cdn.net/assets/images/h1aljmE.png">
	<meta name="theme-color" content="#0cc3f1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="https://minttank.b-cdn.net/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="https://minttank.b-cdn.net/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/ionicons/css/ionicons.min.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/flickity/dist/flickity.min.css">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="https://minttank.b-cdn.net/assets/vendor/summernote/dist/summernote-bs4.css">
    <!-- GoodGames -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/css/goodgames.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="https://minttank.b-cdn.net/assets/css/custom.css">   
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="https://minttank.b-cdn.net/assets/vendor/jquery/dist/jquery.min.js"></script>   
</head>
<body>
<?php include '../component/menu.php' ?>
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">

            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                     <a href="https://mintank.com" class="nk-nav-logo">
                <img src="https://minttank.b-cdn.net/assets/images/logos.png" alt="mintank" width="120">
            </a>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

		<?php 
if($_GET['id'] == "")
{
  echo '
      <div class="nk-main">      
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
     <li><a href="../index.php">Anasayfa</a></li>            
        <li><span class="fa fa-angle-right"></span></li>        
        <li><span>Duyurular & Etkinlikler</span></li>        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->      
<div class="container">
    <div class="row vertical-gap">
	<div class="col-lg-8">    
			<div class="nk-gap-2"></div>';			
    $query = $baglanti->query("select * from posts  LIMIT 12");
    foreach($query as $value)
	{	
	$type = $value["type"];
	$title = $value["title"];
	$id = $value["id"];
	$imagelink= '';
	if($type=='duyuru')
	{
		$imagelink = 'https://minttank.b-cdn.net/assets/images/notices-icon.png';
	}
	else if($type=='etkinlik')		
	{
		$imagelink = 'https://minttank.b-cdn.net/assets/images/celebrate-icon.png';
	}
	else
	{
		$imagelink = 'https://minttank.b-cdn.net/assets/images/notices-icon.png';
	}
		echo '<div class="nk-team">
                <div class="nk-team-logo">
                    <img src="'.$imagelink.'" alt="'.$title.'">
                </div>
                <div class="nk-team-cont">
                    <h3 class="h4 mb-20"><span class="text-main-1">'.$type.'</span> &nbsp;'.$title.'</h3>
                   <a href="?id='.$id.'" <h4 class="h6 mb-5">DEVAMINI GÖR</h4></a>
                </div>
            </div>';
	}; 
	echo '<div class="nk-gap-2"></div>
	<div class="nk-pagination nk-pagination-center">
            <a href="#" class="nk-pagination-prev">
                <span class="ion-ios-arrow-back"></span>
            </a>
            <nav>
                <a class="nk-pagination-current" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>...</span>
                <a href="#">14</a>
            </nav>
            <a href="#" class="nk-pagination-next">
                <span class="ion-ios-arrow-forward"></span>
            </a>
        </div>';
	echo '</div>';
	
}

else 
{
	echo '<div class="nk-main">      
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
     <li><a href="../index.php">Anasayfa</a></li>      
        <li><span class="fa fa-angle-right"></span></li>        
        <li><a href="#">Duyurular & Etkinlikler</a></li>       
        <li><span style="display:none;" class="fa fa-angle-right"></span></li>        
        <li style="display:none;></li>   
		
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->      
<div class="container">
    <div class="row vertical-gap">
	<div class="col-lg-8">    
			<div class="nk-gap-2"></div>';
	$queryx = $baglanti->prepare("select * from posts  where id=:id");
    $queryx->bindParam(':id', $_GET["id"] , PDO::PARAM_INT);
    $queryx->execute();	
    foreach($queryx as $value)
 	{
	$type = $value["type"];
	$title = $value["title"];
	$id = $value["id"];
	$content = $value["content"];
	echo '
	<h3 class="text-main-1">'.$title.'</h3><br>
	<blockquote class="nk-blockquote">
    <div class="nk-blockquote-icon"><span>"</span></div>
    <div class="nk-blockquote-content" style="color:white;font-size:18px;">'.$content.'</div>
    <div class="nk-blockquote-author"><span>Mintank Ekibi</span></div>
</blockquote>
        </div>';
	 
	} 
}
?>
    
        <?php include '../component/sidebar.php' ?>
    </div>
</div>
<div class="nk-gap-2"></div>     
<?php include '../component/footer.php' ?>        
    </div>  
        <!-- START: Page Background -->
    <img class="nk-page-background-top" src="https://minttank.b-cdn.net/assets/images/bg-top-3.png" alt="">
    <img class="nk-page-background-bottom" src="https://minttank.b-cdn.net/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->  
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0">Search</h4>
               <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
<?php if($_SESSION["UserName"] == "")
{
	include 'component/register.php';}?>  
<!-- START: Scripts -->
<!-- Object Fit Polyfill -->
<script src="https://minttank.b-cdn.net/assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- GSAP -->
<script src="https://minttank.b-cdn.net/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<!-- Popper -->
<script src="https://minttank.b-cdn.net/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="https://minttank.b-cdn.net/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sticky Kit -->
<script src="https://minttank.b-cdn.net/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- Jarallax -->
<script src="https://minttank.b-cdn.net/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
<!-- imagesLoaded -->
<script src="https://minttank.b-cdn.net/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Flickity -->
<script src="https://minttank.b-cdn.net/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
<!-- Photoswipe -->
<script src="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<!-- Jquery Validation -->
<script src="https://minttank.b-cdn.net/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- Jquery Countdown + Moment -->
<script src="https://minttank.b-cdn.net/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/moment/min/moment.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Hammer.js -->
<script src="https://minttank.b-cdn.net/assets/vendor/hammerjs/hammer.min.js"></script>
<!-- NanoSroller -->
<script src="https://minttank.b-cdn.net/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>
<!-- SoundManager2 -->
<script src="https://minttank.b-cdn.net/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>
<!-- Seiyria Bootstrap Slider -->
<script src="https://minttank.b-cdn.net/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<!-- Summernote -->
<script src="https://minttank.b-cdn.net/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
<!-- nK Share -->
<script src="https://minttank.b-cdn.net/assets/plugins/nk-share/nk-share.js"></script>
<!-- GoodGames -->
<script src="https://minttank.b-cdn.net/assets/js/goodgames.min.js"></script>
<script src="https://minttank.b-cdn.net/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->
</body>
</html>