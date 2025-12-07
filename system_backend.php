<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "portofolio_riziq_2026";

$koneksi = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    if (empty($nama) || empty($email) || empty($pesan)) {
        echo '
        <script>
          Swal.fire({
            title: "Lengkapi Data Bos 😜!",
            icon: "info",
            draggable: true
          });
        </script>
        ';
    } else {
        $data = "INSERT INTO portofolio (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
        $query = mysqli_query($koneksi, $data);
        echo '
        <script>
          Swal.fire({
            title: "Data Di Tambahkan 🤗!",
            icon: "success",
            draggable: true
          });
        </script>
        ';
    }
}
?>
