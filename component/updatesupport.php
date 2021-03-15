<?php 
    include("../config.php");
  

$key = ")r5r9r(>UB`oFNF2}4Lp";

if($_POST)
{
	$sec = $_POST["sec"];
	$baslik = $_POST["baslik"];
    $cevap = $_POST["cevap"];
    $array = explode("|", $baslik);
    $user = explode("(",$array[1]);
	if($sec == $key)
	{
	$username = rtrim($user[1],")");
	$updateSupport = $baglanti->prepare("Update support set answer=:Cevap , state=2 where ID=:ID");
    $updateSupport->bindParam(':ID',$array[0], PDO::PARAM_INT);
    $updateSupport->bindParam(':Cevap',$cevap, PDO::PARAM_STR,1000);		
    $updateSupport->execute();

	$username = trim($username);
	$sorgulogin = $baglanti->prepare("SELECT * FROM users where username=:username");
    $sorgulogin->bindParam(':username', $username, PDO::PARAM_STR, 30);
    $sorgulogin->execute();	


   if($sorgulogin->rowCount() > 0)
   {
     foreach($sorgulogin as $value)
     {
	$dt = "keycode=SiuRLFKSJKz2kDpaZ9lzCQ==&activeip=127.0.0.1&vr=ticket&ticketuser=".$value["username"]."&ticketno=$array[0]&ticketuserid=".$value["id"]."";
	$chpay=curl_init();
	curl_setopt($chpay, CURLOPT_URL, "http://apps.mintank.com:555?".$dt);
	curl_setopt($chpay, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($chpay, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($chpay, CURLOPT_TIMEOUT, 20);	
	@curl_exec($chpay);	
	 }
   }
	echo '<script type="text/javascript">alert("Destek talebini '.$username.'cevaplama başarılı");window.location="http://apps.mintank.com//pg46urbvhc/support/"</script>';
	}
}



?>