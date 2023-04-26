<?php
include('baglan.php');
$duzenle=mysqli_query($conn,"SELECT * FROM suv WHERE id=".$_GET['id']);
if( $row = mysqli_fetch_assoc($duzenle));
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>suv Ekle</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>suv Ekle</h1>
			</div>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="login-form">
					<div class="control-group">
						<input type="text" name="marka" class="login-field" value="<?php echo($row['marka']) ?>" id="login-name">
						<label class="login-field-icon fui-user" for="login-name"></label>
					</div>
					<div class="control-group">
						<input type="text" name="model" class="login-field" value="<?php echo($row['model']) ?>" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<div class="control-group">
						<input type="text" name="renk" class="login-field" value="<?php echo($row['renk']) ?>" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<div class="control-group">
						<input type="text" name="km" class="login-field" value="<?php echo($row['km']) ?>" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<div class="control-group">
						<input type="file" name="resim">
					</div>
					<div class="control-group">
						<input type="text" name="fiyat" class="login-field" value="<?php echo($row['fiyat']) ?>" id="login-pass"  >
						<label class="login-field-icon fui-user" for="login-pass"></label>
					</div>
					<input type="submit" class="btn btn-primary btn-large btn-block" value="Güncelle" ></a>
				</div>
			</form>
		
		<?php


// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if ($_POST) {
  $marka = $_POST["marka"];	
  $model = $_POST["model"];
  $renk = $_POST["renk"];
  $km = $_POST["km"];
  $fiyat = $_POST["fiyat"];
  
  // Check if a new image is selected
  if ($_FILES["resim"]["name"]) {
    // Get image extension and save the file with its full extension
    $image_name = $_FILES["resim"]["name"];
    $image_type = $_FILES["resim"]["type"];
    $image_size = $_FILES["resim"]["size"];
    $image_temp = $_FILES["resim"]["tmp_name"];
    $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $image_path = "images/".$_GET['id'].".".$image_ext;

    // Save the new image to the server
    move_uploaded_file($image_temp, $image_path);

    $update_query = "UPDATE suv SET marka='$marka', model='$model', renk='$renk', km='$km', resim='$image_path', fiyat='$fiyat' WHERE id=".$_GET['id'];
  } else {
    $update_query = "UPDATE suv SET marka='$marka', model='$model', renk='$renk', km='$km', fiyat='$fiyat' WHERE id=".$_GET['id'];
  }
  
  // Perform update query
  if (mysqli_query($conn, $update_query)) {
    echo "<script>alert('Verileriniz başarıyla güncellendi.');</script>";
    header("Location: adminsuv.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}


?>

		</body>
	</html>