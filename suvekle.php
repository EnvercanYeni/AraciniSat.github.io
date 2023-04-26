<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SUV Ekle</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>SUV Ekle</h1>
			</div>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="login-form">
					<div class="control-group">
						<input type="text" name="marka" class="login-field" placeholder="Marka" id="login-name">
						<label class="login-field-icon fui-user" for="login-name"></label>
					</div>
					<div class="control-group">
						<input type="text" name="model" class="login-field" placeholder="Model" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<div class="control-group">
						<input type="text" name="renk" class="login-field" placeholder="Renk" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<div class="control-group">
						<input type="text" name="km" class="login-field" placeholder="Km" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<div class="control-group">
						<input type="file" name="resim">
					</div>
					<div class="control-group">
						<input type="text" name="fiyat" class="login-field" placeholder="Fiyat" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<input type="submit" class="btn btn-primary btn-large btn-block" value="Ekle" ></a>
				</div>
			</form>
			<?php
    $conn = mysqli_connect("localhost", "root", "", "aracinisat");
    if ($_POST) {
        $marka = $_POST["marka"];
        $model = $_POST["model"];
        $renk = $_POST["renk"];
        $km = $_POST["km"];
        $km = $_POST["km"];
        
        // Get image extension and save the file with its full extension
        $image_name = $_FILES["resim"]["name"];
        $image_type = $_FILES["resim"]["type"];
        $image_size = $_FILES["resim"]["size"];
        $image_temp = $_FILES["resim"]["tmp_name"];
        $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
		
		$fiyat = $_POST["fiyat"];
        
        // Check if the file extension is valid
        if (!in_array($image_ext, array("jpg", "jpeg", "png", "gif"))) {
            echo "<script>alert('Sadece JPG, JPEG, PNG ve GIF dosyaları yükleyebilirsiniz.');</script>";
        } else {
            $image_path = "uploads/" . uniqid() . "." . $image_ext;
            
            // Move the uploaded file to the designated folder
            move_uploaded_file($image_temp, $image_path);
            
            // Save the image path and other information to the database
            $ekle = mysqli_query($conn, "INSERT INTO suv (marka, model, renk, km, resim, fiyat) VALUES ('$marka', '$model', '$renk', '$km', '$image_path','$fiyat')");
            
            if($ekle) {
                echo "<script>alert('suv başarıyla eklendi!');</script>";
              echo "<script>window.location.href = 'adminsuv.php';</script>";
            }
        }
    }
?>