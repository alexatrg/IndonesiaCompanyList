<!DOCTYPE html>
<html>
<title>Register</title>
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
<div class="w3-content" style="max-width:1100px;">

  <!-- Register -->
 <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Register Your Company</span>
  </div>

  <form class="w3-container" action="register-proses.php" method = "post" enctype="multipart/form-data">
    <div class="w3-section">
      <label>Email address</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="company_email" required>
    </div>
    <div class="w3-section">
      <label>Company Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="company_name" required>
    </div>
    <div class="w3-section">
      <label>Company Description</label>
      <textarea class="w3-input w3-border w3-hover-border-black" style="width:100%;"type="text" name="company_description" required></textarea>
    </div>
    <div class="w3-section">
      <label>Company Logo</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="file" name="company_logo" required>
    </div>
    <button type="submit" name = "register" class="w3-button w3-block w3-black">Send</button>
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
