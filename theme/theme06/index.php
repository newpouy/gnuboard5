<!DOCTYPE html>
<html>
<title>Theme06</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="./img/TU-1.jpg" style="width:100%">
  <a href="#company" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>Company</p>
  </a>
  <a href="#Business" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Business</p>
  </a>
  <a href="#Service" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Service</p>
  </a>
  <a href="./bbs/board.php?bo_table=gallery" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
<i class="fa fa-file-picture-o" style="font-size:40px"></i>
    <p>Gallery</p>
  </a>
    <a href="./bbs/board.php?bo_table=notice" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
<i class="fa fa-book" style="font-size:36px"></i>
    <p>Board</p>
  </a>
   <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>Contact</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#company" class="w3-bar-item w3-button" style="width:25% !important">Company</a>
    <a href="#Business" class="w3-bar-item w3-button" style="width:25% !important">Business</a>
    <a href="#Service" class="w3-bar-item w3-button" style="width:25% !important">Service</a>
    <a href="./bbs/board.php?bo_table=gallery" class="w3-bar-item w3-button" style="width:25% !important">Gallery</a>
    <a href="./bbs/board.php?bo_table=notice" class="w3-bar-item w3-button" style="width:25% !important">Board</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">Contact</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">



  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey  w3-center  w3-padding-64" id="company">
      <h1 class="w3-jumbo">Theme06</h1>
    <p>Photographer and Web Designer.</p>

	<div class="w3-content w3-justify w3-text-grey   w3-padding-64" id="company">
		    <h2 class="w3-text-light-grey">Company</h2>
  <img src="./img/TU-2.jpg" alt="boy" class="w3-image" width="100%" height="100%">


    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
 

<!-- The App Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="Business">
      <h2 class="w3-text-light-grey">Business</h2>
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>The App</b></h1>
      <h1 class="w3-xxxlarge w3-text-green"><b>Why buy it?</b></h1>
      <p><span class="w3-xlarge">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
   
        </div>
    <div class="w3-col l4 m6">
      <img src="./img/TU-3.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
      
    </div>
  </div>
</div>






   <!-- Service Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="Service">

    <h2 class="w3-text-light-grey">Service</h2>

    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
 <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">5GB Storage</li>
          <li class="w3-padding-16">Mail Support</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">50GB Storage</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      </div>

   
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact</h2>
    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> 서울시 동대문구 망우로 21길 97-9</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone : 070-4842-7893</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email : juwon5@hanmail.net</p>
    </div>
  <!-- End Contact Section -->


    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.okwebs.co.kr" target="_blank" class="w3-hover-text-green">okwebs.co.kr</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
