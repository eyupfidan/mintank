<?php include '../config.php'; ?>
<!DOCTYPE html>
<?php
    function getUsers($u)
	 {
     $data = http_build_query(array('username' => ''.$u.'' , 'sec' => ')r5r9r(>UB`oFNF2}4Lp'));
     $options = array('http' => array('method' => 'POST', 'header' => 'Content-Type: application/x-www-form-urlencoded', 'content' => $data));
     $context = stream_context_create($options);
     $url = 'http://apps.mintank.com/component/senplayerdata.php';
     $response = file_get_contents($url, false, $context);
     $array = explode("|", $response);
     return $array;
     }
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
<html lang="en">
<head>	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kullanıcı Paneli | Mintank Bombom</title>
    <meta name="description" content="Kullanıcı bilgilerinizi buradan düzenleyebilirsiniz.">
    <meta name="author" content="_nK">
    <link rel="icon" type="image/png" href="https://minttank.b-cdn.net/assets/images/h1aljmE.png">
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
 <div class="nk-main">      
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
     <li><a href="../index.php">Anasayfa</a></li>            
        <li><span class="fa fa-angle-right"></span></li>        
        <li><span>KULLANICI PANELİ</span></li>        
    </ul>
</div>
<div class="nk-gap-1"></div>
</script>
<!-- END: Breadcrumbs -->    
<div class="container">

		<?php if($_SESSION["UserName"] != "")
{
	$array = getUsers($_SESSION["UserName"]);
	$money = $array[3];
	$grade = $array[1];
	$win = $array[8];
	$total = $array[7];	
	$medal = $array[9];	
	$nick = $array[0];		
		echo'
		<div class="row vertical-gap">	
<div class="col-lg-4" id="col-lg-pass" style="
    float: left;">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://minttank.b-cdn.net/assets/images/info-icon.png" style="width: 45px;" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title text-main-1"><a id="abc" href="#">BİLGİLERİM</a></h3>
                    </div>
                </div>
	<br>
	 <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://minttank.b-cdn.net/assets/images/password-icon.png" alt="" >
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title text-main-1"><a  id="cba" href="#">ŞİFREMİ DEĞİŞTİR</a></h3>
                    </div>
                </div>
	<br>
	 <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://minttank.b-cdn.net/assets/images/telephone-icon.png" alt="" style="width: 40px;">
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title text-main-1"><a  id="xyz" href="#">TELEFON GÜNCELLE</a></h3>
                    </div>
                </div>
				<br> 
					 <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://minttank.b-cdn.net/assets/images/mybuy.png" alt="" style="width: 40px;">
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title text-main-1"><a  id="wrx" href="#">GEÇMİŞ YÜKLEMELERİM</a></h3>
                    </div>
                </div>
	</div>

				
	
<div class="col-lg-8">  
<!-- Change Password Begin -->
                <div class="nk-feature-2" style="display:none" id="hideid2">
<form id="sign-in-form" class="sign-in-form"  action="#" novalidate="novalidate">
<div class="nk-gap"></div>
<input type="password" name="oldpassword" id="oldpassword" class=" form-control" placeholder="Şifreniz">
<div class="nk-gap"></div>
<input type="password" name="newpassword1"  id="newpassword1"class="required form-control" placeholder="Yeni Şifre">
<div class="nk-gap"></div>
<input type="password" name="newpassword2" id="newpassword2" class="required form-control" placeholder="Yeni Şifre Tekrar">
<div class="nk-gap-2"></div>
<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" onclick="UpdatePassword()">
<span>ŞİFREYİ GÜNCELLE</span>
<span class="icon"><i class="ion-paper-airplane"></i></span>
</a>

						<div class="col-md-8">
							<br>
							<div  id="loading" style="display:none;">Lütfen bekleyiniz...</div>
							<span id="fogot-notice" style="display:none;"></span>				
						</div>
	</form></div>
<div class="nk-feature-2" style="display:none;" id="hideid3">
<form id="sign-in-form" class="sign-in-form" action="#" novalidate="novalidate">
<div class="nk-gap"></div>
<h5 align="center">Lütfen başında 0 olmadan 10 haneli şekilde GİRİNİZ.</h5>
<input type="tel" name="updatephone" id="updatephone" class=" form-control" placeholder="Telefon Numarası Giriniz">
<div class="nk-gap"></div>
<div class="nk-gap-2"></div>
<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" onclick="UpdatePhone()">
<span>ŞİFREYİ GÜNCELLE</span>
<span class="icon"><i class="ion-paper-airplane"></i></span>
</a>
						<div class="col-md-8">
							<br>
							<div id="loading2" style="display:none;">Lütfen bekleyiniz...</div>
							<span id="fogot-notice2" style="display:none;"></span>				
						</div>
	</form></div>
	<div class="nk-feature-2" style="display:none;" id="hideid4">
     <div class="col-lg-12">    
			<div class="nk-gap-0"></div>

			
<table class="nk-table">
<thead>
<tr>
<th colspan="5">GEÇMİŞ YÜKLEMELERİNİZ</th>
</tr>
</thead>
<tbody>
<tr>';
$getPayMoney = $baglanti->prepare("SELECT * FROM Users_Pay_Money where username=:username and State = 1");
$getPayMoney->bindParam(':username', $_SESSION["UserName"], PDO::PARAM_STR, 30);
$getPayMoney->execute();	

if($getPayMoney->rowCount() > 0)
{
     foreach($getPayMoney as $value)
     {	
		 echo '
		 <td align="center"><img src="https://mintank.com/assets/images/favicon.png" width="35px"</td>
<td align="center">'.$value["GameMoney"].' Kristal</td>
<td class="text-center"><strong>'.$value["Amount"].' TRY</strong></td>
<td class="text-center"><strong>'.$value["Date"].'</strong></td>
<td class="text-center"><strong>'.$value["Email"].'</strong></td>
</tr>
<tr>';
	 }
}

	echo '
</tbody>
	</table>
	</div>
	 </div>
			<style>
@media screen and (max-width:500px) {
.sign-in-form{width:300px;}
.nav{flex-wrap:nowrap;}
#col-lg-pass{height: 200px;}
}
@media screen and (min-width:501px) {
.sign-in-form{width:500px;}
#col-lg-pass{height: 560px;}
}
			</style>
<!-- User Info Begin -->  
<div class="nk-feature-2"  id="hideid">
<h3>Merhaba! <font color="#ffc107">'.$nick.'</font></h3>
<div class="nk-tabs">
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active show" href="#" role="tab" data-toggle="tab" aria-selected="true">SEVİYE : '.$grade.'</a>
</li>
<li class="nav-item">
<a class="nav-link active show" href="#" role="tab" data-toggle="tab" aria-selected="true">TOPLAM SAVAŞ : '.$total.'</a>
</li>

<li class="nav-item">
<a class="nav-link active show" href="#" role="tab" data-toggle="tab" aria-selected="true">KAZANILAN SAVAŞ : '.$win.'</a>
</li>

</ul>
</div>
<div class="nk-tabs" style="margin-top:20px;">
<ul class="nav nav-tabs" role="tablist">

<br><br>
<li class="nav-item">
<a class="nav-link active show" href="#" role="tab" data-toggle="tab" aria-selected="true">KUPON : '.$money.'</a>
</li>

<li class="nav-item">
<a class="nav-link active show" href="#" role="tab" data-toggle="tab" aria-selected="true">MADALYA : '.$medal.'</a>
</li>
<li class="nav-item">
<a class="nav-link active show" href="#" role="tab" data-toggle="tab" aria-selected="true">Kristal : '.$gift.'</a>
</li>
<br>
</ul>
</div><br>
<h5>İP ADRESİNİZ: <font color="#ffc107">'.getRealIpAddr().'</font></h5>
</div>

<!-- User Info Finish -->  
                </div>';} 
	else {
	echo '<div class="nk-info-box text-danger">
<div class="nk-info-box-icon">
<i class="ion-close-round"></i>
</div>
<h3>Hata!</h3>
<em>Bu kısıma sadece giriş yapmış kullanıcılar ulaşabilir.</em>
</div>
<meta http-equiv="refresh" content="3;url=https://mintank.com/">'; }?>
	</div>
  </div>
</div>
	 <div class="nk-gap-6"></div>
	  <div class="nk-gap-6"></div>
	 <div class="nk-gap-2"></div>
	 	<script>
$("#abc").click(function(){
   $("#hideid").show(250);
	 $("#hideid2").hide(500);
	$("#hideid3").hide(500);
	$("#hideid4").hide(500);
	
})
$("#cba").click(function(){
   $("#hideid").hide(500);
	$("#hideid3").hide(500);
	$("#hideid4").hide(500);	
	 $("#hideid2").show(250);
})
$("#xyz").click(function(){
   $("#hideid").hide(500);
   $("#hideid2").hide(500);
	$("#hideid4").hide(500);	
   $("#hideid3").show(250);
})
$("#wrx").click(function(){
   $("#hideid").hide(500);
   $("#hideid2").hide(500);
	$("#hideid3").hide(500);
   $("#hideid4").show(250);
	
})			
			
</script>
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
	<script type="text/javascript">
		function UpdatePhone() {
			$('#fogot-notice2').html("");			
			$('#loading2').slideDown(function() {	
				var tel = $('#updatephone').val();
				if(tel == '') {
					$('#loading2').slideUp(function() {
						$('#fogot-notice2').html('Lütfen tüm bilgileri doldurun.').slideDown();
						return;
					});
				}
				else {
					$.ajax({
						type: "POST",
						url: "../ajax.php?UpdatePhone=true",
						data:
						{
							t: tel
						},
						success : function(data){
							$('#fogot-notice2').html(data);
							$('#loading2').slideUp(function() {
								$('#fogot-notice2').slideDown();
							});
						},
						error : function(){
							$('#fogot-notice2').html('Hata, lütfen tekrar deneyin');
							$('#loading2').slideUp(function() {
								$('#fogot-notice2').slideDown();
							});
						}
					});
				}
			});
		}
		</script>	


	<script type="text/javascript">
		function UpdatePassword() {
			$('#fogot-notice').html("");			
			$('#loading').slideDown(function() {	
				var old = $('#oldpassword').val();
				var new1 = $('#newpassword1').val();
				var new2 = $('#newpassword2').val();
				if(old == '' || new1 == '' || new2 == '') {
					$('#loading').slideUp(function() {
						$('#fogot-notice').html('Lütfen tüm bilgileri doldurun.').slideDown();
						return;
					});
				}
				else {
					$.ajax({
						type: "POST",
						url: "../ajax.php?Update=true",
						data:
						{
							o: old,
							n: new1,
							w: new2
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