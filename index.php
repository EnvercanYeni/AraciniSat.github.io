




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kullanıcı Girişi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Kullanıcı Girişi</h1>
			</div>
		<form method="post" action="islem.php">
			<div class="login-form">
				<div class="control-group">
					<input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
					<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
					<input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass"  >
					<label class="login-field-icon fui-user" for="login-pass"></label>
				</div>
			<a href="islem.php"><button  class="btn btn-primary btn-large btn-block" >Giriş Yap</button></a>
		</form>
			
			
		</div>
			<a href="kayit.php"><input type="button"class="btn btn-primary btn-large btn-block" value="Kayıt Ol" ></a>
	</div>
		
</body>
</html>


