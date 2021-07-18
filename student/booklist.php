<!DOCTYPE html>
<html>
<head>
<title>Books Section</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/glossy.css">
<link rel="stylesheet" href="css/gallery.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/footer.css">
</head>

<style>

    body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg2.jpg);
      background-attachment: fixed; 
      background-size: cover;
      display: grid;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    
  tr {
    padding: 2%;
    border: 3px solid;
  }

  td {
    padding: 2%;
    border: 3px solid;
    border-color: rgb(255, 255, 255);

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
    
    <a href="home.php"><i class="fa fa-fw fa-home"></i>  Home</a>
    <a href="#"><i class="fa fa-fw fa-book"></i>  All Books</a>
    <a href="PreviouslyBorrowed.php"><i class="fa fa-fw fa-borrow"></i>  Previously Borrow</a>
    <a href="Recommend.php"><i class="fa fa-fw fa-recommend"></i>  Recommend Books</a>
    <a href="Issue.php"><i class="fa fa-fw fa-issue"></i>  Currently Issued Books</a>
    <a href="User.php"><i class="fa fa-fw fa-user"></i>  User Setting</a>
  </div>
  
  <div class="main">
    
    
  <!--Gallery buku2-->
  <center> <table class="container"
    style="table-layout: fixed; backdrop-filter: blur(10px); width: 100%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
    <tr>
      <td style="word-wrap: break-word">
        <b>Recent Published Books</b>
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
      
        
    </div><button onclick="window.location.href='AllBooks.php'" class="fill" name="Explore">Explore More!</button></div></td></tr></table></center>

    <!--test1-->
 
    <!--end test-->
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
  

  </html>