<form action="" method="get">
    <label>Cari : </label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>

<?php
if (isset($_get['cari'])) {
    $cari = $_get['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}

$url = "http://localhost/PWD10Post/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
    echo "<p>";
    echo "NIM : " . $r->nim . "<br/>";
    echo "Nama : " . $r->nama . "<br/>";
    echo "Jenis Kelamin : " . $r->jkel . "<br/>";
    echo "Alamat : " . $r->alamat . "<br/>";
    echo "Tanggal Lahir : " . $r->tgllhr . "<br/>";
    echo "<p>";
}
