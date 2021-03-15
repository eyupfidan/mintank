<?php include '../config.php' ?>
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
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kullanıcı Sözleşmesi | Mintank Bombom</title>
    <meta name="description" content="Oyuna bakiyeyi buradan yükleyebilirsiniz">
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
                <img src="/assets/images/logos.png" alt="mintank" width="120">
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
        <li><span>Kullanıcı SÖZLEŞMESİ</span></li>        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->    

<div class="container">
<div class="row vertical-gap">
		
		<div class="col-lg-12">    
			<div class="nk-gap-0"></div>
		<div class="nk-box-2 bg-dark-2">
<h5>1. Sözleşmenin Konusu</h5>
<br>
<p>www.mintank.com Sitesinde (Kısaca: “Site” olarak anılacaktır) yayınlanan, yer verilen, Mint Tank ve Mint Tank Kullanıcı hesap bilgileri kullanılarak erişim sağlanan Mint Tank'a ait olan veya sadece Site’de erişim olanağı sunulan her nevi oyun ve dijital içerik veya veri ile Site’de sunulan veya satışa konu edilen her nevi ürün ve/veya hizmetin (Kısaca: “İçerik” olarak anılacaktır) tabi olduğu kullanım koşulları ile Kullanıcı ile 
Sitenin yayıncısı olan Famenad Software (Kısaca “Mint Tank” olarak anılacaktır) arasında Sitenin kullanılmasının veya buradaki içeriklerden doğrudan veya dolaylı herhangi bir şekilde yararlanılmasının tabi olduğu sözleşmesel kullanım şartlarının belirlenmesi ve düzenlenmesidir.</p>
<br>
<p><b style="color:white;">1.1.</b> Mint Tank Sitesi sadece eğlence amacıyla kullanılabilir. Sitenin ticari amaçlarla, gelir elde etmek maksadıyla veya diğer benzer bir hedefe matuf şekilde kullanımı mümkün değildir. Kullanıcı Mint Tank hizmet ve içeriklerini sadece ticari olmayan şekilde ve kişisel kullanım için kullanabileceğini kabul eder.</p>
<br>
<p><b style="color:white;">1.2.</b> Mint Tank, bu Sözleşmenin içerdiği şartları Sitenin içeriğindeki değişiklikler, sunulan ürün veya hizmetlerde oluşan güncelleme, yeni ürün veya hizmet sunumu yahut buna benzer sebeplerle kısmen veya tamamen güncelleme yahut değiştirme hak ve yetkisine haiz olup bu gibi hallerde Sözleşme Site üzerinden Kullanıcıya güncel haliyle ve bilgilendirme yapılarak sunulacaktır.</p>
<br>
<p><b style="color:white;">1.3.</b> Kullanıcı, Mint Tank’ın bu bende konu şekilde yaptığı değişiklikleri veya güncellemeleri; Mint Tank tarafından kendisine doğrudan bilgilendirmede bulunulmuş olması veya değişikliklerin yahut güncellemelerin vukuundan sonraki bir tarihte Siteye erişim sağlaması veya buradaki herhangi bir içerikten doğrudan veya dolaylı şekilde yararlanmış olması halinde haberdar edilmediğini yahut mezkur değişikliklerin kendisine tatbikinin mümkün olmadığını/olmayacağını iddia, talep veya beyan edemez.</p>
<br>
<h5>2. Sözleşmenin Taraftarları</h5>
<br>
<p><b style="color:white;">2.1.</b> Kullanıcı Sözleşmesinin tarafları Mint Tank ve “Kullanıcı”dır. Bu sözleşmede Kullanıcı ve Mint Tank ayrı ayrı olarak ve tek başına “Kullanıcı” ve “Mint Tank” şeklinde; birlikte ise “Taraflar” olarak anılır ve adlandırılır.</p>
<br>
<p><b style="color:white;">2.2.</b> “Kullanıcı”: Mint Tank Sitesine üye olarak veya üye olmaksızın erişim sağlayarak, Mint Tank Sitesinde sunulan herhangi bir ürün ve/veya hizmeti kısmen veya tamamen, geçici veya süreklilik arz eden bir şekilde; kendi adına ve hesabına yahut başka kişi veya kurumların nam ve/veya hesabına her ne suretle olursa olsun edinen veya yararlanan tüm gerçek veya tüzel kişileri ifade etmek amacıyla kullanılır. Kullanıcı sıfat, hak ve yükümlülükleri, yetkisiz erişim hali ayrık ve yukarıda tanzim edilen şartlara tabi olmak üzere değerlendirilir.</p>
<br>
<p><b style="color:white;">2.3.</b> Kullanıcının, Mint Tank sitesine sağlamış olduğu veriler üye olduğu anda Mint Tank hizmetlerinin tedarik edilmesi, işletilmesi, iyileştirilmesi, anlaşılması, özelleştirilmesi, desteklenmesi ve pazarlanmasında kullanılabilir.</p>
<br>
<p><b style="color:white;">2.4.</b> Kullanıcının, Mint Tank Sitesindeki Kullanıcı hesabının erişim bilgilerini veya diğer yetkilerini her ne suretle olursa olsun üçüncü bir kişiye geçici veya kalıcı bir şekilde kullandırma hakkı bulunmamaktadır. Buna aykırı kullanımların söz konusu olması halinde kendisine Kullanıcı hesabı kullandırılan kişi veya kişiler Mint Tank tarafından tespit edilebilir ve bu durumda ilgili hesap kalıcı veya sürekli şekilde askıya alınarak kullanım sonlandırılabilir.</p>
<br>
<p><b style="color:white;">2.5.</b> Kullanıcı dışındaki diğer kişilere hesap kullandırma eylemlerinin sonuçlarından hesap sahibi tek başına sorumludur. Böyle bir durumda başkasının Kullanıcı hesabını her ne suretle olursa olsun kısmen veya tamamen, geçici veya devamlı suretle kullanma eyleminde bulunan kişiler buna istinaden Mint Tank’a karşı herhangi bir hak veya talep ileri süremez.</p>
<br>
<p><b style="color:white;">2.6.</b> Yetkisiz erişim ve kullanımlar hukuka aykırı addedildikleri ölçüde yetkili resmi merciler nezdinde yasal yaptırımlara tabi tutulabilir.</p>
<br>
<p><b style="color:white;">2.7.</b> Kullanıcı bir üste bende konu mezkur yasal yaptırım riskini bildiğini ve sonuçlarını hesabını kullandırdığı kişiler ile birlikte veya münferiden üstelendiğini kabul ve taahhüt eder. Kullanıcı hesaplarını yetkisiz kullanan kişiler, bu sözleşme kapsamında hesap sahipleri ile birlikte veya münferiden Mint Tank’a karşı sorumludur fakat bu kimselerin bu sözleşmenin tarafı olduklarını iddia veya talep etmeleri mümkün değildir.</p>
<br>
<p><b style="color:white;">2.8.</b> Yetkisiz erişim ve yetkisiz şekilde başkasına ait hesap kullanımı, kullanımı gerçekleştirene bu sözleşme anlamında “Kullanıcı”ya tanınan hakları ve sıfatı sağlamaz. Aksine mezkur eylemleri icra edenler, Mint Tank’a karşı bu sözleşmenin Kullanıcıya yüklediği yükümlülüklere tabi tutulacaklarını Kullanıcı ile birlikte kabul ve taahhüt etmiş addedilir.</p>
<br>
<p><b style="color:white;">2.9.</b> Sözleşme tarafların arasında hiçbir suretle herhangi bir işbirliği ilişkisi, herhangi bir ortaklık ilişkisi veya başka her ne ad altında olursa olsun Mint Tank’ddn Kullanıcıya herhangi bir hak devri sonucu doğuran hukuki muamele olarak vasıflandırılamaz.</p>
<br>
<h5>3. Mülkiyet</h5>
<br>
<p><b style="color:white;">3.1.</b> www.mintank.com ve bu Siteden sunulan hizmet ve içerik bizat Famenad Software tarafından geliştirilmektedir. Sitede oyun amaçlı kullanılmış olan temel içerik 7road firmasına ait olup, illegal yollarla temin edilmemiştir ve Mint Tank'ın bu konu üzerinde hak iddia ve/veya talebi bulunmamaktadır. </p>
<br>
<p><b style="color:white;">3.2.</b> Mint Tank Sitesinden Kullanıcı tarafından Mint Tank tarafından belirlenen ilke ve kurallara uygun şekilde edinimi gerçekleştirilen hiçbir içerik Kullanıcıya bunların üzerinde mülkiyet hakkı vermez. Kullanıcının Site üzerinden erişim veya edinim sağladığı, yahut kullandığı her nevi içerik Mint Tank’ın münhasır mülkiyetindedir. Bu bende konu her nevi içeriğin kullanım süreleri, geçerlilik süreleri ve kullanımının sonlandırılmasına ilişkin karar verme hak ve yetkisiz münhasıran Mint Tank’a aittir.</p>
<br>
<p><b style="color:white;">3.3.</b> Kullanıcı, Mint Tank üzerinden edinimini gerçekleştirdiği her nevi içerik, ürün veya hizmetin usulüne uygun edinilmiş olmak şartıyla kendisine sadece ilgili edinime konu unsuru kullanma hak ve yetkisini tanıyacağını bilir, kabul ve taahhüt eder.</p>
<br>
<p><b style="color:white;">3.4.</b> Kullanıcının, Mint Tank Sitesinden edindiği ürün, hizmet veya içeriklerin tamamı ilgili varlığın özelliklerine, tabi olduğu kullanım şartlarına, Mint Tank tarafından belirlenecek olan ilkelere ve yasal düzenlemelere uygun şekilde kullanılmak zorundadır. Buna aykırı kullanımların Mint Tank tarafından tespit edilmesi, sonlandırılması, aykırı kullanımı gerçekleştirenlerin haklarında yasal düzenlemelerin gerektirdiği ölçü ve usullere tabi işlemlerin yapılması mümkündür.</p>
<br>
<p><b style="color:white;">3.5.</b> Kullanıcının, Mint Tank Sitesinden edindiği her nevi içeriğin kullanım hakkı, ilgili içeriğin kullanım şartlarına tabi şekilde münhasıran edinimi gerçekleştiren Kullanıcıya aittir. Kullanıcının bu bende konu şekilde edindiği içerikleri ticarete konu etmesi, gelir elde etme amacıyla kullanması, üçüncü kişilere kullandırması hallerinde Mint Tank’a karşı ilgili içerikten ötürü herhangi bir talepte bulunması mümkün değildir.</p>
<br>
<p><b style="color:white;">3.6.</b> Kullanıcı, Mint Tank Sitesinden edindiği her nevi içerikten sadece ilgili içeriğin sunulma ve edinilme amacıyla istifade eder. Kullanıcının, bu bende konu şekilde edindiği içerikleri işlemesi, değiştirmesi, ayrıştırması, çoğaltması, kopyalaması ve benzeri şekillerde edinim amacı dışında istifade maksadına yönelik işlemlere tabi tutması bu Sözleşme’ye aykırılık olarak kabul edilir. Kullanıcı, mezkur eylemlerde bulunması halinde bu eylemlerin hukuka aykırı olarak değerlendirileceği ve ilgililer hakkında yasal inceleme, takip, soruşturma ve diğer işlem süreçlerinin tatbik edilebileceğini bilir ve kabul eder.</p>
<br>
<p><b style="color:white;">3.7.</b> Kullanıcı, Mint Tank Sitesinden edindiği ürüne erişim elde ettiği anda, vazgeçme, siparişi iptal etme ve para iade hakkını kaybeder.</p>			
           </div>		
	</div>
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