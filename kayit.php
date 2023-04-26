<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kullanıcı Kaydı</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Kullanıcı Kaydı</h1>
			</div>
			<form method="post" action="">
				<div class="login-form">
					<div class="control-group">
						<input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
						<label class="login-field-icon fui-user" for="login-name"></label>
					</div>
					<div class="control-group">
						<input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<button type="submit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>
				</div>
			</form>
			<a href="index.php"><button class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
		</div>
	</div>
</body>
</html>
<?php
    $conn = mysqli_connect("localhost", "root", "", "aracinisat");
    if ($_POST) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
            // Save the image path and other information to the database
            $ekle = mysqli_query($conn, "INSERT INTO admin (username, password) VALUES ('$username', '$password')");
            
            if($ekle) {
                echo "<script>alert('Kaydınız Başarıyla Oluşturuldu!');</script>";
              echo "<script>window.location.href = 'index.php';</script>";
            }
        }
    
?>

