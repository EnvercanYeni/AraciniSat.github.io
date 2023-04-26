<?php

include('baglan.php');

// Formdan kullanıcı adı ve şifreyi almak
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifreyi kontrol etme
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Sonuçları kontrol etme
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['lisans'] == '1') {
        // Giriş başarılı, oturum başlat ve adminotomobil.php sayfasına yönlendir
        session_start();
        $_SESSION['username'] = $username;
        header("Location: adminotomobil.php");
        exit;
    } else {
        // Lisansı 1 olan kullanıcıları otomobil.php sayfasına yönlendir
        header("Location: otomobil.php");
        exit;
    }
} else {
    // Kullanıcı adı veya şifre yanlış ise pop-up mesajı göster ve index.php'ye yönlendir.
    echo "<script>alert('Kullanıcı adı veya şifre yanlış!');</script>";
    header("Location: index.php");
    exit;
}



unset($_POST);

?>
