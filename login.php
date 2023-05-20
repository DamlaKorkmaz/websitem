<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş</title>
</head>

<body>
  PHP EKRANINA HOŞGELDİNİZ!!! <br>
<?php
$gecici=$_POST['mail'];
$message = "Hoşgeldin $gecici --> Tamam tuşuna bastığınızda anasayfaya yönlendirileceksiniz...";

if(!($_POST['mail']==""))
{
    if($_POST['mail']=="b221210098@sakarya.edu.tr" )
    {
       
        if(!($_POST['sifre']=="221210098"))
        {
            echo "Şifre hatalı girilmiştir.";
            echo "<p><a href='login.html'>&lt;GERİ DÖN&gt;></a></p> ";
        }
        else{
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Refresh: 0.1; url=Hakkinda.html"); 
            exit();
        }
    }
    else{
        echo "E-posta hatalı girilmiştir.";
        echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";
    }
}else
{
    echo "E-posta ve şifre alanını doldurunuz.";
}

?> 
</body>

</html>