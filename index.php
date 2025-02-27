<!-- SQL BAĞLANTI -->

<?php

$baglanti = new mysqli("localhost", "root", "", "test");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$baglanti->close();

?>

<!-- sql query methodu ile veri çekme -->

<?php



$baglanti = new mysqli("localhost", "root", "", "kisi");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$sorgu = $baglanti->query("SELECT kisi_adi, kisi_soyadi, kisi_eposta FROM kisiler");

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

$cikti = $sorgu->fetch_array();

echo "Adı: " . $cikti["kisi_adi"] . "<br /> Soyadı: " . $cikti["kisi_soyadi"] . "<br /> E-posta: " . $cikti["kisi_eposta"];

$sorgu->close();
$baglanti->close();



?>

<!-- SQL prepare method ile veri çekme -->

<?php

$sira = 1;

$baglanti = new mysqli("localhost", "root", "", "kisi");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$sorgu = $baglanti->prepare("SELECT * FROM kisiler WHERE kisi_sira = ?");

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

$sorgu->bind_param("i", $sira);
$sorgu->execute();

$sonuc = $sorgu->get_result();

$cikti = $sonuc->fetch_array();

echo "Adı: " . $cikti["kisi_adi"] . "<br /> Soyadı: " . $cikti["kisi_soyadi"] . "<br /> E-posta: " . $cikti["kisi_eposta"];

$sorgu->close();
$baglanti->close();

?>