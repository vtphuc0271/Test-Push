<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:../login/index.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../index.php">trang chu</a>
    <script>
       // alert("Dang nhap thanh cong");
        <?php
        if ($_SESSION['user']=="admin") {
            echo(" alert(\"Chao mung admin\");");           
            
        }
        else{
            echo(" alert(\"Dang nhap thanh cong\");");
           header('location:../index.php');
        }
        ?>

    </script>
    
</body>
</html>
