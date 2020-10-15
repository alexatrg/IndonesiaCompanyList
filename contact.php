<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>Contact - PLAZA SERBA ADA</title>
<style>
* {
margin : 0;
padding : 0;
}

body {
	font-family : verdana;
}
</style>

<body>

<header class="header">
	<div class="menu">
		<ul>
			<li><a href="index.html" style = "margin-left:24px;float:left;font-family:Georgia;font-size:40px;">PASERBA</a></li>
			<li class="dropdown" style = "float:left;margin-left:130px;"><a href="product.html">OUR PRODUCTS</a>
				<ul class="container-dropdown">
					<li><a href="computer.html">Computers & Accessories</a></li>
					<li><a href="videogames.html">Video Games</a></li>
					<li><a href="menwatch.html">Men's Watch</a></li>
					<li><a href="smartphone.html">Smartphones</a></li>
					<li><a href="wireless.html">Wireless</a></li>
				</ul>
			</li>
		<li><a href="order.php" style = "margin-left:40px;float:left;">ORDER HERE</a></li>
		<li><a href="about.html" style = "margin-left:40px;float:left;">ABOUT US</a></li>
		<li><a href="contact.php" style = "margin-left:40px;float:left;">CONTACT</a></li>
		<li><a href="account.php" style = "margin-left:40px;float:left;">ACCOUNT</a></li>
		</ul>

	</div>
</header>
</br>

<h3 style = "font-size:35px;font-style:italic;text-align:center;"><b>CONTACT US</b></h3>
<hr>
<br>
<br>
<form action = "contact-proses.php" method = "post">
<table style = "margin-left:290px;"> 
<tr>
<td>Nama</td>
<td>:<input type = "text" name = "nama" placeholder = "Masukkan Nama Anda" autocomplete = "off" autofocus required></td>
</tr>
<tr>
<td>Email</td>
<td>:<input type = "text" name = "email" placeholder = "Masukkan Alamat Email" autocomplete = "off" autofocus required></td>
</tr>
<tr>
<td>No. Telepon</td>
<td>:<input type = "text" name = "telepon" placeholder = "Masukkan Nomor Telepon" autocomplete = "off" autofocus required></td>
</tr>
<tr>
<td>Topik Bantuan</td>
<td>:<select name = "topikbantuan" autocomplete = "off" autofocus required>
<option>Silahkan Pilih Topik Bantuan</option>
<option value = "Informasi">Informasi</option>
<option value = "Saran">Saran</option>
<option value = "Komplain">Komplain</option>
</select></td>
</tr>
<tr>
</form>
</table>

<table>
<tr>
<td valign=top style = "padding-left:325px;">Pesan</td>
<td valign=top style = "padding-left:103px;">:</td>
<td><textarea name="pesan" placeholder = "Masukkan Pesan Anda" style = "padding-top:5px;padding-left:8px;margin-left:-18px;"></textarea></td>
</tr>
</table>
<input type = "submit" name = "contact" value = "SUBMIT" id="btnSubmit" style = "margin-left:325px;">

<div id="footer">
Copyright of <b>PASERBA - Plaza Serba Ada</b> | Medan | Indonesia | All Right Reserved.
</div>

</body>
</html>