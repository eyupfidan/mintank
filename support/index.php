<?php include '../config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		blockquote{
  max-width:715px;
  font-size: 1.4em;
  width: auto;
  margin:50px auto;
  font-family:Open Sans;
  font-style:italic;
  color: #fff;
  padding: 1.2em 30px 1.0em 55px;
  border-left: 8px solid #0cc3d3;
  line-height:1.6;
  position: relative;
  background: #232930;
}

blockquote::before{
  font-family:Arial;
  content: "\201C";
  color: #0cc3d3;
  font-size:4em;
  position: absolute;
  left: 10px;
  top:-10px;
}

blockquote::after{
  content: '';
}

blockquote span{
  display:block;
  color:#333333;
  font-style: normal;
  font-weight: bold;
  margin-top:1em;
}
}
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Destek | Mintank Bombom</title>
    <meta name="description" content="Oyun içi hata bug istek veya önerilerinizi buradan bildirebilirsiniz.">
    <meta name="author" content="mintank">
    <link rel="shortcut icon" href="https://minttank.b-cdn.net/assets/images/favicon.ico">
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
	<script src='https://www.google.com/recaptcha/api.js?hl=tr'></script>
    <script src="https://minttank.b-cdn.net/assets/vendor/jquery/dist/jquery.min.js"></script>  
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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

      <div class="nk-main">      
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
     <li><a href="../index.php">Anasayfa</a></li>            
        <li><span class="fa fa-angle-right"></span></li>        
        <li><span>DESTEK MERKEZİ</span></li>        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->      
<div class="container">
    <div class="row vertical-gap">
		<div class="col-lg-8">
	      <div class="nk-gap-2"></div>

<?php

if($_GET['ticket'] == "")
{
if($_SESSION["UserName"] == "")
{
	echo '<div class="nk-info-box text-danger">
            <div class="nk-info-box-icon">
                <i class="ion-close-round"></i>
            </div>
            <h3>Hata!</h3>
            <em>Destek bildirimini sadece giriş yapmış kullanıcılar açabilir.</em>
        </div>';
}			
else if($_SESSION["UserName"] != "" && $_GET['id'] == "")
		{
$ticketCount = $baglanti->prepare("SELECT * FROM support where username='".$_SESSION["UserName"]."' and State=1");
$ticketCount->execute();		
echo '<div class="col-lg-12">
                <div class="nk-info-box text-warning">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div> 
                    <h3>Destek BİLDİRİMİ OLUŞTUR</h3>
                    <em>Oyun içi hata bug istek veya önerilerinizi buradan bildirebilirsiniz.</em>
                    <div class="nk-gap-1"></div>
                    '; if($ticketCount->rowCount() >= 1)
					{ echo '<button  class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger" disabled>CEVAPLANMAMIŞ BİLDİRİMLERİN VAR! <BR>CEVAPLANMADAN YENİ TALEP OLUŞTURULAMAZ.</button>';} 
	                else {echo '<a href="?ticket=add" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning">Bildirim Oluştur</a>';}
                echo '</div>
            </div>
			<div class="col-lg-12">
                <div class="nk-info-box text-info">
                    <div class="nk-info-box-icon">
                        <i class="ion-information"></i>
                    </div>
                    <h3>Destek BİLDİRİMLERİM</h3>
                    <em>Daha önce oluşturduğun destek bildirimlerini buradan görüntüleyebilirsiniz.</em>
                    <div class="nk-gap-1"></div>
                    <a href="?ticket=show" class="nk-btn nk-btn-rounded nk-btn-color-info">
                        <span>Görüntüle</span>
                        <span class="icon"><i class="ion-help-circled"></i></span>
                    </a>
                </div>
            </div>
		';}
}
$username = $_SESSION["UserName"];
$email = $_SESSION["Email"];

$ticketCount = $baglanti->prepare("SELECT * FROM support where username='".$_SESSION["UserName"]."' and State=1");
$ticketCount->execute();	
if($_GET['ticket'] == "add" && $username != "" && $ticketCount->rowCount() <= 0)
{
echo 
'<div class="col-lg-12">
                <div class="nk-box-2 bg-dark-2">
				<h3 align="center">DESTEK BİLDİRİMİ OLUŞTUR</h3>
							<center><div id="loading" style="display:none;"><center>Lütfen bekleyiniz...</center></div>
							<span id="fogot-notice" style="display:none;color:red;font-size:20px;"></span></center>
				<br><form action="#"  class="nk-form nk-form-ajax" novalidate="novalidate">
                    <div class="row vertical-gap sm-gap">
							<div class="col-md-6">
                            <input type="email" style="background-color: #232930;"class="form-control disabled" disabled="disabled" name="username" placeholder="'.$username.'"></input>	
							</div>
						<div class="col-md-6">
                            <input type="email" style="background-color: #232930;"class="form-control disabled" disabled="disabled" name="email" placeholder="'.$email.'">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control required" name="head"  id="head" placeholder="Başlık">
                        </div>
                        <div class="col-md-12">
											<select style="height:35px;" class="form-control" name="level" id="level">
                                                <option value="genel">Genel Hatalar</option>
                                                <option value="map">Map Hataları</option>
                                                <option value="hakaret">Hakaret Bildirimi</option>
												<option value="firlatici">Fırlatıcı Hata</option>
                                            </select>
                        </div>
                    </div>
                    <div class="nk-gap"></div>
                    <textarea class="form-control required" name="message"  id="message" rows="5" placeholder="Detaylı bilgiyi buradan bildirebilirsiniz." style="margin-top: 0px; margin-bottom: 0px; height: 210px;"></textarea>
<br><div class="g-recaptcha" style="width:10px" data-sitekey="6Lc7m6kZAAAAAGS8dFmrZQJazjDHV8tY6ZYZ6HCc"></div>
                    <br><a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3" onclick="RequestTicket()">
                        <span>Gönder</span>
                        <span class="icon"><i class="ion-paper-airplane"></i></span>
                    </a>
					
				
                </form>
                    </div>
            </div>';	
}
else if($_GET['ticket'] == "add" && $username != "")
{
	echo '<div class="nk-info-box text-danger">
            <div class="nk-info-box-icon">
                <i class="ion-close-round"></i>
            </div>
            <h3>Hata!</h3>
            <em>Şuanda cevaplanmamış bir destek talebin mevcut. Bu destek talebi cevaplandıktan sonra tekrar oluşturabilirsin.</em>
        </div>';
}
if(isset($_POST["supclose"]))
{
	$id = $_POST["supid"];
	$cevap = "Bu destek talebi sizin tarafınızdan kapatılmıştır.";
	$updateSupport = $baglanti->prepare("Update support set answer=:Cevap , state=2 where ID=:ID");
    $updateSupport->bindParam(':ID',$id, PDO::PARAM_STR,30);
    $updateSupport->bindParam(':Cevap',$cevap, PDO::PARAM_STR,1000);		
    $updateSupport->execute();
	echo '<script type="text/javascript">alert("Başarlı | Destek talebi sonlandırılmıştır.");window.location="https://mintank.com/support/?ticket=show";</script>';
}
if($_GET['ticket'] == "show")
{
	
	$queryx = $baglanti->query("select * from support where username='".$username."' order by ID DESC LIMIT 10 ");
    foreach($queryx as $value)
	{
	$title = $value["baslik"];
	$desc  = $value["mesaj"];
	$state = $value["state"];
	$id  = $value["ID"];
	$type = "";
	$icon = '';
	if($state==1)
	{
		$type = 'nk-info-box text-warning';
		$icon = 'ion-close-round';
		$text = "Henüz Cevaplanmadı";
		$number = 6;
	}
	else
	{
		$type = 'nk-info-box text-success';
		$icon = 'ion-checkmark-round';
		$text = "Talebin Cevaplandı";
		$number = 3;
	}
	echo '<div class="'.$type.'">
            <div class="nk-info-box-icon">
                <i class="'.$icon.'"></i>
            </div>
            <div class="nk-post-categories">
			';
		if($text != "Talebin Cevaplandı")
		{
			echo '
			<span class="bg-main-'.$number.'">'.$text.'</span><br><br>
		<center><form method="post">
		<input name="supid" type="hidden" value="'.$value["ID"].'"/>
		<button name="supclose" type="submit" href="https://mintank.com/panel/" class="nk-btn nk-btn-x1  nk-btn-color-danger" style="background-color:Red; border-radius: 4px;">
		TALEBİ Sonlandır</button></form></center></div>
			';
		}
		else
		{
			echo '<span class="bg-main-'.$number.'">'.$text.'</span></div>';
		}
		echo'
			<h3>'.$title.'</h3> 
            <em>'.mb_substr($desc,0,150).'... <a href="?id='.$id.'">Devamını Gör</a></em>
        </div>';		
	}

}
	if($_GET['id'] != "")
	{
	$queryz = $baglanti->prepare("select * from support  where id =:id and username=:username");
    $queryz->bindParam(':id', $_GET["id"] , PDO::PARAM_INT);
    $queryz->bindParam(':username', $username, PDO::PARAM_STR,30);		
    $queryz->execute();		
	foreach($queryz as $valuez)
	{
	$titlez = $valuez["baslik"];
	$descz  = $valuez["mesaj"];
	$onemz = $valuez["onem"];
	$datez = $valuez["date"];
	if($username == $valuez["username"])
	   {
	echo '<div class="col-lg-12">
                <div class="nk-box-2 bg-dark-2">
                    <h4>'.$titlez.'</h4>
					<p style="color:white;font-size:16px;">'.$descz.'</p>
                </div>
            </div><br>';
		if($valuez["answer"] != "")
	   {
		$contentblockquote = $valuez["answer"];
		   echo '<blockquote style="font-size:18px;">'.$contentblockquote.'
<span style="font-size:14px;color:white;font-style:italic;text-align:right;">Saygılarımızla Mintank Ekibi</span>
</blockquote>';
	   }
	}

	}
	}
?>
		</div>		
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
{include 'component/register.php';}?>  
	
<script type="text/javascript">
		function RequestTicket() {
			$('#loading').slideDown(function() {
				var head = $('#head').val();
				var level = $('#level').val();
				var message = $('#message').val();
				var upload =  $('#uploadfile').val();
				if(head == '' || message == '') {
					$('#loading').slideUp(function() {
						$('#fogot-notice').html('Lütfen tüm bilgileri doldurun.').slideDown();
						return;
					});
				}
				else {
					$.ajax({
						type: "POST",
						url: "../ajax.php?AddTicket=true",
						data: "h="+head+'&l='+level+'&m='+message+'&u='+upload,
						data:
						{
							h: head,
							l: level,
							m: message,
							u: upload,
							captcha: grecaptcha.getResponse()
						},
						success : function(data){
							$('#fogot-notice').html(data);
							$('#loading').slideUp(function() {
								$('#fogot-notice').slideDown();
							});
						},
						error : function(){
							$('#fogot-notice').html('Hata, lütfen tekrar deneyin');
							$('#loading').slideUp(function() {
								$('#fogot-notice').slideDown();
							});
						}
					});
				}
			});
		}
		</script>	
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