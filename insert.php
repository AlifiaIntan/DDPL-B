<?php
$to = "alvian.em169@gmail.com";
$subject = "Welcome!";
$messages = "Selamat Datang Di Rumah Sakit Citra Gading Medika";
    
$headers .= "Citra Gading Medika"; //bagian ini diganti sesuai dengan email dari pengirim
@mail($to, $subject, $messages, $headers, "-fcitragad@gmail.com");
if(@mail) 
{
    echo "pengiriman berhasil";
}
else 
{
    echo "pengiriman gagal";
}
?>