<?php
    include('baglan.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM motosiklet WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Kayıt başarıyla silindi')</script>";
        header('Location: adminmotosiklet.php');
        exit();
    } else {
        echo "Hata oluştu: " . $conn->error;
    }
    $conn->close();
?>
