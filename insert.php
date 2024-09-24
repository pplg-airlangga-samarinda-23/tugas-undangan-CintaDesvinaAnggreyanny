<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "undangan";
$connection = new mysqli($host, $username, $password, $database);
if (isset($_POST)) {

    $nama = @$_POST['nama'];
    $ucapan = @$_POST['ucapan'];
    $keterangan = @$_POST['keterangan'];

    if ($nama != "" && $ucapan != "" && $keterangan != "") {
        var_dump($_POST);
        $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";
        $connection->query($sql);
    }

    header("location: http://localhost/TUGASS-undangan-CINTADESVINAANGGREYANNY/tugas-undangan-CintaDesvinaAnggreyanny/#home ");
}
</section>
?>

