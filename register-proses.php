<?php 
if (isset($_POST['register'])) {

include ('connect.php');
$company_email = $_POST['company_email'];
$company_name = $_POST['company_name'];
$company_description = $_POST['company_description'];
$company_logo = $_FILES['company_logo']['name'];
$company_logo_file = $_FILES['company_logo']['tmp_name'];
$path = "DataRegister/".$company_logo;

move_uploaded_file($company_logo_file, $path);
$input = mysqli_query($koneksi,"INSERT INTO dataregister VALUES ('$company_email','$company_name','$company_description','$company_logo')") or die (mysql_error());

if ($input) {
	echo "<script> alert('Terimakasih telah mendaftarkan perusahaan Anda. Kami akan segera menghubungi Anda kembali.'); location='index.php';</script>";
}

else {
	echo "<script> alert('Maaf permintaan Anda tidak dapat dikirim.'); location='index.php';</script>";
}

}

?>