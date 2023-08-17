<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if ($cek == 1) {
    header("location:tables.php");
} else {
?>
    <script language="JavaScript">
        alert('Oops! Username atau Password tidak sesuai ...');
        document.location = './';
    </script>
<?php
}
?>