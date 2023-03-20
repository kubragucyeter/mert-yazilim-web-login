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
		echo("<h1>Login Redirected Successfully</h1>");
	}
	else{echo("<h1>wrong email</h1>");}
    //bağlanıcağı veri tabanı
	$baglan = new PDO("mysql:host=localhost;dbname=kayit", "root","");
	$al=$baglan->prepare("SELECT * FROM registered WHERE kadi=?");
	$al->execute(array($email));
		if($al -> rowCount()){
			foreach($baglan -> query("SELECT * FROM registered WHERE kadi='$email'") as $dogruysadevam){
				$paswdepola=$dogruysadevam['password'];}
				if($paswdepola==$sifresi){
					echo("<h1>Login Redirected Successfully</h1>");
					header("refresh:3;url=gidecegiyer.html");
				}
				else{echo("<h1>Password Incorrect Try Again</h1>");
					 header("refresh:3;url=login.html");}
		}else{echo "<h1>User Not Found Try Again</h1>";
			  header("refresh:3;url=login.html");}
?>
</body>
</html>
