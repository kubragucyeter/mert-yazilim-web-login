<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	

<?php
	$email=$_POST['email'];
	$sifresi=$_POST['passw'];
	if($email=="burak@gmail.com"){
		echo("<h1>Giriş Başarılı Yönlendiriliyorsunuz</h1>");
	}
	else{echo("<h1>hatalı email</h1>");}
    //bağlanıcağı veri tabanı
	$baglan = new PDO("mysql:host=localhost;dbname=kayit", "root","");
	$al=$baglan->prepare("SELECT * FROM kayitli WHERE kadi=?");
	$al->execute(array($email));
		if($al -> rowCount()){
			foreach($baglan -> query("SELECT * FROM kayitli WHERE kadi='$email'") as $dogruysadevam){
				$paswdepola=$dogruysadevam['sifre'];}
				if($paswdepola==$sifresi){
					echo("<h1>Giriş Başarılı Yönlendiriliyorsunuz</h1>");
					header("refresh:3;url=gidecegiyer.html");
				}
				else{echo("<h1>Şifre Yanlış Tekrar Deneyin</h1>");
					 header("refresh:3;url=login.html");}
		}else{echo "<h1>Kullanıcı Bulunamadı Tekrar Deneyiniz</h1>";
			  header("refresh:3;url=login.html");}
?>
</body>
</html>