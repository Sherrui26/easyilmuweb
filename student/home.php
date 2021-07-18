<!DOCTYPE html>
<html>
<head>
<title>Easy Ilmu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/Imageslider.css">
<link rel="stylesheet" href="css/gallery.css">
<link rel="stylesheet" href="css/glossy.css">
<link rel="stylesheet" href="css/footer.css">
</head>

<style>

  body {
    font-family: "Lato", sans-serif;
    background-image: url(img/bg.jpg);
    background-attachment: fixed; 
    background-size: cover;
    display: grid;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .fa-home:before{content: url(img/home.png); height:auto; }
  .fa-book:before{content: url(img/Book.png); height:auto; }
  .fa-borrow:before{content: url(img/previous.png); height:auto; }
  .fa-recommend:before{content: url(img/recommend.png); height:auto; }
  .fa-issue:before{content: url(img/issued.png); height:auto; }
  .fa-user:before{content: url(img/user.png); height:auto; }
  
  .fa{display:inline-block;font:normal normal normal 
      14px/1 FontAwesome;font-size:inherit;text-rendering:auto;
      -webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
      .fa-fw{width:1.28571429em;text-align:center}

  tr {
    padding: 2%;
    border: 3px solid;
  }

  td {
    padding: 2%;
    border: 3px solid;
    border-color: rgb(255, 255, 255);

  }

.drop-shadow
{
	float: left;
	position: relative;
	margin: 10px 3px 0 10px !important;
	margin: 10px 3px 0 5px; 
	background: transparent url(img/books/effect/drop_shadow.png) bottom right no-repeat !important;
	background: transparent url(img/books/effect/drop_shadow_ie.gif) bottom right no-repeat;
}

.drop-shadow img
{
	padding: 4px;
	display: block;
	position: relative;
	margin: -6px 6px 6px -6px;
	background-color: #ffffff;
	border: 1px solid #a9a9a9;
}

.drop-shadow p
{
	right: 11px;
	bottom: 0px;
	color: #eeeeee;
	padding: 5px 10px;
	position: absolute; 
	background-color: #2e333b;
	border-top: 1px solid #111111;
}

a.drop-shadow { border-bottom-width: 0; font-weight: normal; }

a.dropshadow:hover, a.dropshadow:active { background-color: #eeeeee; }

</style>

<body>

  <!--Side panel kat kiri-->
<div class="sidenav">
    <div class="logo">
        <div class="container1">
            <div class="image">
              <img src="img/logo.png">
            </div>
            <div class="text">
              <h1>EasyIlmu</h1>
            </div>
          </div>
    </div>
  <br><br><br>
  
  <a href="#"><i class="fa fa-fw fa-home"></i>  Home</a>
  <a href="booklist.php"><i class="fa fa-fw fa-book"></i>  All Books</a>
  <a href="PreviouslyBorrowed.php"><i class="fa fa-fw fa-borrow"></i>  Previously Borrow</a>
  <a href="Recommend.php"><i class="fa fa-fw fa-recommend"></i>  Recommend Books</a>
  <a href="Issue.php"><i class="fa fa-fw fa-issue"></i>  Currently Issued Books</a>
  <a href="User.php"><i class="fa fa-fw fa-user"></i>  User Setting</a>
</div>

<div class="main">
  
  <!--Slider atas sekali-->
  <center><div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">

      <!--All 4 Images, tukar mana yg nk-->
      <div class="slide first">
        <img src="img/1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/2.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/3.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/4.jpg" alt="">
      </div>

      <!--Auto Slide-->
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
    </div>
    <!--Manual Slide-->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
  </div></center>
<br>

  <!--Gallery buku2-->
  <center> <table class="container"
    style="table-layout: fixed; backdrop-filter: blur(10px); width: 100%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
    <tr>
      <td style="word-wrap: break-word">
        <center><i><b>Most Popular Books This Week!</b></i></center>
    <div id="content-wrapper">
    <div id="content">
      <!--Ni semua buku2, tukar aje pic, ikut ah nanti nk direct ke x bila user tekan-->
      <p><a href="#" class="drop-shadow"><img src="img/books/the_mephisto_club.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/dark_celebration.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/ricochet.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/echo_park.jpg" width="150" height="200"/></a></p>
      
      <p><a href="#" class="drop-shadow"><img src="img/books/the_world_is_flat.jpg" width="150" height="200"  /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/act_of_treason.jpg" width="150" height="200"  /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/rich_dad_poor_dad.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/freakonomics.jpg" width="150" height="200"/></a></p>
      
      <p><a href="#" class="drop-shadow"><img src="img/books/the_mephisto_club.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/dark_celebration.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/ricochet.jpg" width="150" height="200" /></a></p>
      <p><a href="#" class="drop-shadow"><img src="img/books/echo_park.jpg" width="150" height="200"/></a></p>
    </div></div></td></tr></table></center>

  <!--Bahagian text - about us-->
    <br>
    <center> <table
      style="table-layout: fixed; width: 100%; background-color: rgb(151, 151, 151); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
      <tr>
        <td style=" border-color: rgb(0, 0, 0); word-wrap: break-word ">
          <h4>About Us</h4>
      <p>Some text about me. I love taking photos of PEOPLE. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
        </td></tr></table></center>

  <!--Bahagian text 2- apa2 ja like about library maybe?-->
        <br>
    <center> <table
      style="table-layout: fixed; width: 100%; background-color: rgb(121, 121, 121); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
      <tr>
        <td style=" border-color: rgb(0, 0, 0); word-wrap: break-word ">
          <h4>More text lol</h4>
      <p>Some text about me. I love taking photos of PEOPLE. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Some text about me. I love taking photos of PEOPLE. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
      </p>
        </td></tr></table></center>  
</div>
   

<!--Footer-->
<br>  <br>
<footer id="site-footer" style="z-index: 1;">

  <div id="footer1">
    <p>Copyright 2021 EasyIlmu Website - All Rights Reserved </p>
  </div>
  <div id="footer2">
    <p> KCS1104L </p>
  </div>

</footer>
</body>

<!--Script For Slider-->
<script type="text/javascript">
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
      counter = 1;
    }
  }, 5000);
  </script>

</html> 
