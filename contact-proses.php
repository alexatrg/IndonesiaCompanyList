<?php 
if (isset($_POST['contact'])) {

include ('connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
$input = mysqli_query($koneksi,"INSERT INTO datacontact VALUES ('$name','$email','$subject','$message')") or die (mysql_error());

if ($input) {
	echo "<script> alert('Terimakasih telah menghubungi kami. Kami akan segera menghubungi Anda kembali.'); location='index.php';</script>";
}

else {
	echo "<script> alert('Maaf pesan Anda tidak dapat dikirim.'); location='index.php';</script>";
}

}

?>