<?php 
include ("../config.php");
if(isset($_POST))
{
	$id = $_POST["id"];
	$sec = $_POST["sec"];
	if($sec == "UK%4f)B]94d_1g&9kq5k+twS@Dstzx")
	{
		$update = $baglanti->prepare("Update Users_Pay_Money set State=2 where OrderID=:id");
        $update->bindParam(':id', $id , PDO::PARAM_INT);
        $update->execute();
	}
}
?>