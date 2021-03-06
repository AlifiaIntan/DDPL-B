<!DOCTYPE html>
<html>
  <head>
      <link rel="shorcut icon" href="img/image1.JPG">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Web klinik">
    <meta name="keywords" content="Klinik medis, Laboratorium Klinik, Dokter, Praktek Dokter">
  	<meta name="author" content="citra gading medika">
    <title>Citra Gading Medika</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
    
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Citra Gading</span> Medika</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="facilities.html">Facilities</a></li>
          </ul>
        </nav>
      </div>
    </header>

      <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/cover1.jpg" style="width:150%">
                <div class="text">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Pegawai Melayani dengan Ramah</div>
            </div>

      <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/cover3.jpg" style="width:150%">
            <div class="text">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Peralatan Dijaga Tetap Steril</div>
      </div>

      <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/cover4.jpg" style="width:150%">
            <div class="text">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Pegawai Yang Berpengalaman</div>
      </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
      
    <section id="showcase">
      <div class="container">
        <h1>
            <img src="img/logo.jpg" style="width:100%">
            </h1>
          <font face="Arial" color="#191970" size="6">Siap Melayani Kebutuhan Anda</font>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1>Bergabung Dengan Kami</h1>
        <form action="insert.php" method="post">
          <input type="text" name="email" placeholder="Enter Email..." required="" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/microscope.png">
          <h3>LABORATORIUM MEDIS</h3>
          <p>Laboratorium medis citra gading medika</p>
        </div>
        <div class="box">
          <img src="./img/doctor.png">
          <h3>Klinik Medis</h3>
          <p>Klinik </p>
        </div>
        <div class="box">
          <img src="./img/phone.png">
          <h3>Kontak</h3>
          <p>Alamat:
            Jl. Brigjen Katamso A 408 - 409, Rewwin, Waru - Sidoarjo
            No Telp : (031) - 8679727, 8669998</p>
        </div>
      </div>
    </section>

    <footer>
      <p> &copy; Copyright 2017 Citra Gading Medika</p>
      <p> &copy; All Rights Reserved</p>  
    </footer>
      

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
      
  </body>
</html>
