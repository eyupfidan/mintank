<?php include 'config.php'; ?>
<?php 
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))  
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>
<!DOCTYPE html> 
<html lang="en">
	<head>
	<?php include 'component/menu.php' ?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mintank - Nostalji Sürüm Geri Döndü!</title>
   	<meta name="description" content="Nostalji sürüm bombom pvp server geri döndü! Haydi senide aramızda görmek isteriz!" />
    <meta name="author" content="mintank">
	<meta name="theme-color" content="#0cc3f1">
	<link rel="shortcut icon" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">
    <!-- GoodGames -->
    <link rel="stylesheet" href="assets/css/goodgames.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
	
	</head>
<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>

        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logos.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

	
<?php
if(isset($_POST["login"]))
{
$username = (strip_tags(trim($_POST["clusername"])));
$password = (strip_tags(trim($_POST["clpassword"])));
$result = "";
if($username == "" || $password == "") {$result = "Boş alan bırakmayınız.";}
$password = md5($password);
 
$sorgulogin = $baglanti->prepare("SELECT * FROM users where password =:password and username=:username or email =:email LIMIT 1");
$sorgulogin->bindParam(':password', $password , PDO::PARAM_STR, 30);
$sorgulogin->bindParam(':username', $username, PDO::PARAM_STR, 30);
$sorgulogin->bindParam(':email', $username, PDO::PARAM_STR, 30);
$sorgulogin->execute();	

if($sorgulogin->rowCount() > 0)
{
     foreach($sorgulogin as $value)
     {
		 if($value["mail_state"] != 1) { $result = "E-mail adresini onaylamalısın!";}
		 else
		 {
        /* $_SESSION["UserName"] = $value["username"];
         $_SESSION["UserID"] = $value["id"];
         $_SESSION["Email"] = $value["email"];
         echo '<script type="text/javascript">window.location="index.php";</script>';*/	
		 $result = "Girişler şuanda kapalıdır";
		 }
     }
}
else{
$result = "Giriş bilgileri hatalı";
}
}
		?>
	<div class="nk-gap"></div>
    <div class="nk-main">    
		<div class="nk-countdown nk-countdown-center" data-end="June 30, 2020 17:00:00" data-timezone="EST"><div class="nk-hexagon">
                <div class="nk-hexagon-inner"></div>
                <span>00</span>
                <small>Gün</small>
            </div>
            <div class="nk-hexagon">
                <div class="nk-hexagon-inner"></div>
                <span>00</span>
                <small>Saat</small>
            </div>
            <div class="nk-hexagon">
                <div class="nk-hexagon-inner"></div>
                <span>00</span>
                <small>Dakika</small>
            </div>
            <div class="nk-hexagon">
                <div class="nk-hexagon-inner"></div>
                <span>00</span>
                <small>Saniye</small>
            </div></div>
            <div class="nk-gap-2"></div>      
<div class="container">
	<?php 
$get = $_GET["mail"];
if($get == "true")
{
	$key = $_GET["key"];
	$username = $_GET["username"];
	if($key != "" && $username != "")
	{
	$checkMail = $baglanti->prepare("SELECT * FROM mail_active where username =:username and keycode=:keycode and State=0 LIMIT 1");
    $checkMail->bindParam(':keycode', $key , PDO::PARAM_STR, 150);
    $checkMail->bindParam(':username', $username, PDO::PARAM_STR, 150);
    $checkMail->execute();	
	if($checkMail->rowCount() > 0) 
	{
	foreach($checkMail as $value)
    {
	$updateMailActive = $baglanti->prepare("Update mail_active set State=1 where ID=:ID");
    $updateMailActive->bindParam(':ID',$value["ID"], PDO::PARAM_INT);
    $updateMailActive->execute();
	}
	$updateUsers = $baglanti->prepare("Update users set mail_state = 1 where username=:username");
    $updateUsers->bindParam(':username',  $username, PDO::PARAM_STR, 30);
    $updateUsers->execute();	
		
	echo '<div class="nk-info-box text-success">
            <div class="nk-info-box-icon">
                <i class="ion-checkmark-round"></i>
            </div>
            <h3>MAİL ONAYLAMA BAŞARILI!</h3>
            <em>Artık hesabının güvenliği daha iyi, yönlendiriliyorsun.</em>
        </div>';
	echo '<meta http-equiv="refresh" content="3;url=https://mintank.com">';
	}
	else
	{
		echo '<script>window.location="https://mintank.com/"</script>';	
	}
	}
}
?>	
	
	    <?php if($_SESSION["UserName"] == "")
{
	echo '<div class="col-lg-4" style="
    float: left;
    height: 360px;">
               <div class="nk-box-2 bg-dark-2" style="border-bottom: 4px solid #0cc3f1;">
                  <h4 class="mb-0"><span class="text-main-1">GİRİŞ</span> Yap</h4>
					<div class="nk-gap-2"></div>
						<form id="sign-in-form" method="post"><div class="col-md-15" style="color: white;">Email veya Kullanıcı Adı:
                            <div class="nk-gap"></div>
                      <input type="text" name="clusername" class=" form-control" placeholder="Email veya Kullanıcı Adı">
                            <div class="nk-gap"></div>
                            <input type="password" name="clpassword" class="required form-control" placeholder="Şifre">
				   		</div>
    <div class="nk-gap-2"></div>
<button type="submit" name="login" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">GİRİŞ YAP</button>  </form>				
<div class="nk-gap-2"></div>
<div class="mnt-5" style="
    float: left;">
                                <small> <a href="#">Şifremi Unuttum</a>  &nbsp;<a href="#" style="margin-left:100px;" data-toggle="modal" data-target="#modalLogin">Hesap Oluştur</a></small>
                            </div>
									<font color="red"><div id="loading-login" style="display:none;"><center>Lütfen bekleyiniz...</center></div>
									<span id="fogot-notice-login" style="font-family:Century Gothic;">'.$result.'</span></font>
</div>
	</div>';
	}
	else 
	{
	$sessionuser = $_SESSION["UserName"];
	echo '<div class="col-lg-4" style="
    float: left;
    height: 360px;">
               <div class="nk-box-2 bg-dark-2" style="border-bottom: 4px solid #dd163b;">
                  <h5 class="mb-0"><span class="text-main-1">HOŞGELDİN</span> '.$sessionuser.'</h5>									
<div class="nk-gap-2"></div>
<div class="nk-feature-icon" style="
    margin-left: -20px;
"><ul class="list-property">
                        <li style="color:white;font-size:14px;text-transform:uppercase;font-weight: bold;">SAVAŞMA GÜCÜNÜZ: <a class="nk-count h2 mb-0" style="font-size: 14px; color:#0cc3f1;">0</a> </li><br>
<li style="color:white;font-size:14px;text-transform:uppercase;font-weight: bold;">KRİSTAL BAKİYENİZ: <a class="nk-count h2 mb-0" style="font-size: 14px; color:#0cc3f1;">0</a></li><br>
 <li style="color:white;font-size:14px;text-transform:uppercase;font-weight: bold;">ONLİNE DAKİKANIZ: <a class="nk-count h2 mb-0" style="font-size: 14px; color:#0cc3f1;">0</a></li>
    </ul>
                    </div>
<div class="nk-gap-1"></div><a href="#" class="nk-btn nk-btn-x2 nk-btn-rounded nk-btn-color-white">Oyuna Gir</a>&nbsp; <a href="?logout" class="nk-btn nk-btn-x2  nk-btn-rounded nk-btn-color-main-1">Çıkış Yap</a>
<div class="nk-gap-0" style="
    margin-top: 10px;
"></div> 
<center><a href="#" class="nk-btn nk-btn-x2  nk-btn-color-primary" style="
    border-radius: 4px;">
    <span class="nk-btn-effect-bg"></span>Kullanıcı Paneli</a></center>
									
</div>
	</div>';
	}
	 if (isset($_GET['logout'])) {
    session_destroy();
	echo '<script type="text/javascript">window.location="https://mintank.com/index.php";</script>';
  }
?>
    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
	
        
        <div class="nk-image-slider-item">
            <img src="assets/images/slide-1.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-1.jpg">
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">NOSTALJİ BOMBOM GERİ DÖNÜYOR</h3>
                    <p class="text-white">v4.1 sürümü ile Mint Tank 30 haziran 17:00'da açılıyor. Ön kayıt yaparak hemen hesabını oluşturabilirsin.</p>
                    <a data-toggle="modal" data-target="#modalLogin" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Kayıt Ol</a>
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="assets/images/slide-2.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-2.jpg">          
        </div>
        
        <div class="nk-image-slider-item">
            <img src="assets/images/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-3.jpg">
            
        </div>
        <div class="nk-image-slider-item">
            <img src="assets/images/slide-4.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-4.jpg">
            
        </div>
     
        
       
        
    </div>
    <!-- END: Image Slider -->

    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
	 <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img width="55vh" src="assets/images/instagram.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title" style="font-size:15px;"><a href="#">Instagram</a></h3>
                    <h4 class="nk-feature-title text-main-1" style="font-size:10px;"><a target="_blank" href="https://instagram.com/minttank">Adrese Git</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img width="72vh" src="assets/images/discord.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title" style="font-size:15px;"><a href="#">Dİscord</a></h3>
                    <h4 class="nk-feature-title text-main-1" style="font-size:10px;"><a  target="_blank" href="https://discord.gg/sntbZ8x">Adrese Git</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
					<img  src="assets/images/twitch.png" width="57%" height="57%" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title" style="font-size:15px;"><a href="#">Twİtch</a></h3>
                    <h4 class="nk-feature-title text-main-1" style="font-size:10px;"><a target="_blank" href="https://www.twitch.tv/mintcrystaltv">Adrese Git</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img width="55vh" src="assets/images/youtube.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title" style="font-size:15px;"><a href="#">Youtube</a></h3>
                    <h4 class="nk-feature-title text-main-1" style="font-size:10px;"><a target="_blank"href="https://www.youtube.com/channel/UCMVl002riEORdGwMhy0VxBg">Adrese Git</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->

    <!-- START: Latest News -->
    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Duyuru </span> ETKİNLİKLER</span></h3>
    <div class="nk-gap"></div>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                    <?php
	$query = $baglanti->query("select * from posts  LIMIT 6");
    foreach($query as $value)
	{
		$id = $value['id'];
		$type = $value['type'];
		$title = $value['title'];
		$content = $value['content'];
		$date = $value['date'];
		$imagelink = $value['image_link'];
		$typeicon= '';
		if($type=='duyuru')
		{
			$typeicon='bg-main-3';
		}
		else if($type=='etkinlik')
		{
			$typeicon='bg-main-2';
		}
		echo ' <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="'.$imagelink.'" alt="'.$title.'">
                        </div>
                        <img src="'.$imagelink.'" alt="'.$title.'" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">'.$title.'</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span style="text-transform:uppercase" class="'.$typeicon.'">'.$type.'</span>
                        </span>


                        <div class="nk-news-box-item-text">
							<p>'.mb_substr($content,0,142, "utf-8").'...</p>
                        </div>
                        <a href="notices/?id='.$id.'" class="nk-news-box-item-url">Devamını Gör</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> '.$date.'</div>
                    </div>
                    ';
	}			
					?>
                                       
				</div>
            </div>
        </div>
		<?php 
	$queryx = $baglanti->query("select * from posts  LIMIT 1");
    foreach($queryx as $value)
	{
		$id = $value['id'];
		$type = $value['type'];
		$title = $value['title'];
		$content = $value['content'];
		$date = $value['date'];
		$imagelink = $value['image_link'];
		$typeicon= '';
		if($type=='duyuru')
		{
			$typeicon='bg-main-3';
		}
		else if($type=='etkinlik')
		{
			$typeicon='bg-main-2';
		}
        echo '<div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <div class="nk-news-box-item-image">
                        <img src="'.$imagelink.'" alt="'.$title.'">
                        <span class="nk-news-box-item-categories">
                            <span style="text-transform:uppercase" class="'.$typeicon.'">'.$type.'</span>
                        </span>
                    </div>
                    <h3 class="nk-news-box-item-title">'.$title.'</h3>
                    <div class="nk-news-box-item-text">
                        <p>'.mb_substr($content,0,142, "utf-8").'...</p>
                    </div>
                    <a href="notices/?id='.$id.'" class="nk-news-box-item-more">Devamını Gör</a>
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar"></span> '.$date.'
                    </div>
                </div>
            </div>
        </div>';
		}
							?>
    </div>

    <div class="nk-gap-2"></div>
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">


            <!-- START: Latest Matches -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Canlı</span> Yayın</span></h3>
            <div class="nk-gap"></div>
            <div class="row">
                
<div class="col-md-12">
 <div id="twitch-embed"></div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: 480,
        channel: "mintcrystaltv",
        // only needed if your site is also embedded on embed.example.com and othersite.example.com 
        parent: ["embed.example.com", "othersite.example.com"]
      });
    </script>

                </div>
            </div>
	      <!-- START: Latest Pictures -->
            <div class="nk-gap"></div>
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Oyundan</span> Görseller</span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/4.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/4.png" alt="">
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/3.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/3.png" alt="">
                            </a>
                          
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/2.png" class="nk-gallery-item"  data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/1.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/5.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/6.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/6.png" alt="">
                            </a>
                        </div>
                    </div>
					 <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/10.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/10.png" alt="">
                            </a>
                        </div>
                    </div>
					 <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/8.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/8.png" alt="">
                            </a>
                        </div>
                    </div>
					 <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/9.png" class="nk-gallery-item" data-size="1000x600">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/9.png" alt="1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Latest Pictures -->
        </div>
		
        <?php include("component/sidebar.php"); ?>
    </div>
</div>

<div class="nk-gap-4"></div>
		<?php include 'component/footer.php' ?>
    </div>
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

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
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- Jarallax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.12.0/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>
<!-- NanoSroller -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/javascripts/jquery.nanoscroller.js"></script>
<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>
<!-- Seiyria Bootstrap Slider -->
<script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
<!-- nK Share -->
<script src="assets/plugins/nk-share/nk-share.js"></script>
<!-- GoodGames -->
<script src="assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts --> 
</body>
</html>
