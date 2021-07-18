<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html>
<head>
<title>Recommend Books</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/button2.css">
</head>

<style>

    body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg6.jpg);
      background-attachment: fixed; 
      background-size: cover;
      display: grid;
      align-items: center;
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
    <a href="booklist.php"><i class="fa fa-fw fa-book"></i>  All Books</a>
    <a href="PreviouslyBorrowed.php"><i class="fa fa-fw fa-borrow"></i>  Previously Borrow</a>
    <a href="#"><i class="fa fa-fw fa-recommend"></i>  Recommend Books</a>
    <a href="Issue.php"><i class="fa fa-fw fa-issue"></i>  Currently Issued Books</a>
    <a href="User.php"><i class="fa fa-fw fa-user"></i>  User Setting</a>
  </div>
  
  <div class="main">
    
  <div class="bg-contact2" >
		<div class="container-contact2">
			<div class="wrap-contact2">
  <form class="contact2-form validate-form" action="recommend.php" method="post">
  <span class="contact2-form-title">
						Recommend a Book to Us
					</span>
                                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                                            <label class="input2" for="Title"><b>Book Title</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Title" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                                            <label class="input2" for="Description"><b>Description</b></label>
                                            <div class="controls">
                                                <input type="text" id="Description" name="Description" placeholder="Description" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="button1">Submit Recommendation</button>
                                            </div>
                                        </div>
                                    </form></div></div></div>
                            </div>
                        </div>
<?php
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $Description=$_POST['Description'];
    $rollno=$_SESSION['RollNo'];

$sql1="insert into LMS.recommendations (Book_Name,Description,RollNo) values ('$title','$Description','$rollno')"; 



if($conn->query($sql1) === TRUE){


echo "<script type='text/javascript'>alert('Success')</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
    
}
?> 
  </div>
     
  
  </body>
  

  </html>
  
<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>