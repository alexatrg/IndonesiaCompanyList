<!DOCTYPE html>
<html>
<title>Indonesia Company List</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="index.php" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="company.php" class="w3-button w3-block">Company List</a>
    </div>
    <div class="w3-col s3">
        <a href="partner.php" class="w3-button w3-block">Our Partner</a>
      </div>
    <div class="w3-col s3">
      <a href="Asset/rdf/CompanyListRDF.rdf" class="w3-button w3-block">Download</a>
    </div>

  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:50px;margin-bottom:50px">

  <div class="w3-panel">
    <center>
    <h1><b>Indonesia Company List</b></h1>
    <p>We have a mission to bring every single Company in Indonesia to the top of the World.</p>
    <a href = "register.php"><button class = "w3-button w3-light-grey">Register Your Company</button></a>
    </center>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="Asset/image/profile1.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <!-- <span class="w3-white w3-padding-large w3-animate-bottom">Lorem ipsum</span>  -->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="Asset/image/profile2.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <!-- <span class="w3-white w3-padding-large w3-animate-bottom">Klorim tipsum</span> -->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="Asset/image/profile3.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <!-- <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span> -->
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-row w3-container" id="list">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Indonesia Company List</span>
    </div>
    
    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoBRI.png" style="width:100%">
      <h3>Bank Rakyat Indonesia</h3>
      <p>PT Bank Rakyat Indonesia (Persero), Tbk (BRI atau Bank BRI) adalah salah satu bank milik pemerintah terbesar yang terdapat di Indonesia. <a href="bri.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoMandiri.png" style="width:100%">
      <h3>Bank Mandiri</h3>
      <p>Bank Mandiri adalah bank yang berkantor pusat di Jakarta, dan merupakan bank terbesar di Indonesia dalam hal aset, pinjaman, dan deposit oleh Pemerintah Indonesia.<a href="bankmandiri.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

      <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoBCA.png" style="width:100%">
      <h3>Bank Central Asia</h3>
      <p>PT Bank Central Asia Tbk adalah bank swasta terbesar di Indonesia. Bank ini didirikan pada 21 Februari 1957 dengan nama Bank Central Asia NV dan pernah menjadi bagian dari Salim Group. <a href="bca.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
      </div>

      <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoBNI.png" style="width:100%">
      <h3>Bank Negara Indonesia</h3>
      <p>Bank Negara Indonesia atau BNI adalah sebuah institusi bank milik pemerintah atau perusahaan BUMN di Indonesia. <a href="bni.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
      </div></div>

      <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoTelkom.png" style="width:100%">
      <h3>Telkom Indonesia</h3>
      <p>PT Telekomunikasi Indonesia (Persero) Tbk adalah perusahaan informasi dan komunikasi serta penyedia jasa dan jaringan telekomunikasi secara lengkap di Indonesia. <a href="telkom.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
      </div>

    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoTelkomsel.svg" style="width:100%">
      <h3>Telkomsel</h3>
      <p>Telkomsel adalah salah satu perusahaan operator telekomunikasi seluler di Indonesia. Untuk melayani pelanggan, Telkomsel kini didukung akses call center 24 jam dan 430 pusat layanan yang tersebar di seluruh Indonesia. <a href="telkomsel.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

      <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoHMSampoerna.webp" style="width:100%">
      <h3>HM Sampoerna</h3>
      <p>PT HM Sampoerna Tbk/Hanjaya Mandala Sampoerna adalah perusahaan rokok terbesar pertama di Indonesia. <a href="hmsampoerna.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoPGN.png" style="width:100%">
      <h3>Perusahaan Gas Negara</h3>
      <p>PT Perusahaan Gas Negara (Persero) adalah sebuah BUMN yang bergerak di bidang transmisi dan distribusi gas bumi. <a href="pgn.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoPertamina.png" style="width:100%">
      <h3>Pertamina</h3>
      <p>Pertamina adalah sebuah BUMN yang bertugas mengelola penambangan minyak dan gas bumi di Indonesia. Pertamina masuk urutan ke 122 dalam Fortune Global 500 pada tahun 2013.<a href="pertamina.php" style="color: blue; font-style: italic;">Read More ...</a></p>
      </div>
  
    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoHero.png" style="width:100%">
      <h3>Hero Supermarket Group</h3>
      <p>PT Hero Supermarket Tbk adalah perusahaan ritel yang memiliki cabang di Indonesia.<a href="herosupermarket.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
       <img src="Asset/image/logoUnilever.png" style="width:100%">
      <h3>Unilever Indonesia</h3>
      <p>PT Unilever Indonesia Tbk (IDX: UNVR) adalah perusahaan Indonesia yang merupakan anak perusahaan dari Unilever. <a href="unilever.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

    <div class="w3-col l3 m6 w3-white w3-container w3-padding-16">
      <img src="Asset/image/logoAstra.png" style="width:100%">
      <h3>Astra International</h3>
      <p>Astra International merupakan perusahaan multinasional diversifikasi yang bermarkas di Jakarta, Indonesia. Perusahaan ini didirikan pada tahun 1957 dengan nama PT Astra International Incorporated. <a href="astra.php" style="color: blue; font-style: italic;">
      Read More ...</a></p>
    </div>

  <div class="w3-row-padding" id="download">
    <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16"><a href="all.php" style="color: blue; font-style: italic;">Click to Read Indonesia Company List</a></span>
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
    </div>
    <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="Asset/image/team1.jpg" alt="Alexander Tarigan" style="width:345px;height:200px;">
          <div class="w3-container">
            <h3>Alexander Tarigan</h3>
            <p class="w3-opacity">CEO & Founder</p>
            <p></p>
            <p><a href="https://www.instagram.com/alexa_trg/"><button class="w3-button w3-light-grey w3-block">Contact</button></a></p>
          </div>
        </div>
      </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="Asset/image/team2.jpg" alt="Mohammad Raja Alfach" style="width:345px;height:200px;">
        <div class="w3-container">
          <h3>Mohammad Raja Alfach</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p></p>
          <p><a href="https://www.instagram.com/rajaadlmunthe/"><button class="w3-button w3-light-grey w3-block">Contact</button></a></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="Asset/image/team3.jpg" alt="Dharmawan" style="width:345px;height:200px;">
        <div class="w3-container">
          <h3>Dharmawan</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p></p>
          <p><a href="https://www.facebook.com/dharmawan.salim.961"><button class="w3-button w3-light-grey w3-block">Contact</button></a></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="Asset/image/team4.jpg" alt="Jessica Grasiela Penyria" style="width:345px;height:200px;">
        <div class="w3-container">
          <h3>Jessica Grasiela Penyria</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p></p>
          <p><a href="https://www.instagram.com/jessicagracielaa/"><button class="w3-button w3-light-grey w3-block">Contact</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
 <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="contact-proses.php" method = "post">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="message" required>
    </div>
    <button type="submit" name = "contact" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Copyright 2019. All Right Reserved. Company List (Semantic Web)</h4>
<!--   <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a> -->
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-youtube w3-hover-opacity"></i>
  </div>
 <!--  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
