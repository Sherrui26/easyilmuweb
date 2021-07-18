<?php
ob_start();
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
?>

<!DOCTYPE html>
<html>
<head>
<title>Books Section</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form2.css">
<link rel="stylesheet" href="css/button2.css">
<link rel="stylesheet" href="css/glossy.css">

<style>

body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg4.jpg); 
      justify-content: center;
    }

    .fa-home:before{content: url(img/home.png); height:auto; }
  .fa-book:before{content: url(img/Book.png); height:auto; }
  .fa-issue:before{content: url(img/previous.png); height:auto; }
  .fa-recommend:before{content: url(img/recommend.png); height:auto; }
  .fa-borrow:before{content: url(img/request.png); height:auto; }
  .fa-user:before{content: url(img/user.png); height:auto; }
  .fa-manage:before{content: url(img/manage.png); height:auto; }
  .fa-add:before{content: url(img/add.png); height:auto; }
  
    .fa{display:inline-block;font:normal normal normal 
        14px/1 FontAwesome;font-size:inherit;text-rendering:auto;
        -webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
        .fa-fw{width:1.28571429em;text-align:center}

form.des input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 100%;
  background: #f1f1f1;
}

form.des button {
  float: left;
  width: 50%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.des button:hover {
  background: #0b7dda;
}

form.des::after {
  content: "";
  clear: both;
  display: table;
}

b{
color: darkslategray;  
}

  </style>
</head>


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
  <a style="font-size: 18px;" href="home.php"><i class="fa fa-fw fa-home"></i>   &nbsp;Home</a>
  <a style="font-size: 18px;" href="manageuser.php"><i class="fa fa-fw fa-manage"></i>   &nbsp;Manage Users</a>
  <a style="font-size: 18px;" href="AllBooks.php"><i class="fa fa-fw fa-book"></i>   &nbsp;All Books</a>
  <a style="font-size: 18px;" href="add.php"><i class="fa fa-fw fa-add"></i>   &nbsp;Add Books</a>
  <a style="font-size: 18px;" href="issuereturns.php"><i class="fa fa-fw fa-borrow"></i>   &nbsp;Issue/Return Requests</a>
  <a style="font-size: 18px;" href="usersrecommended.php"><i class="fa fa-fw fa-recommend"></i>   &nbsp;User Recommendations</a>
  <a style="font-size: 18px;" href="Issuelist.php"><i class="fa fa-fw fa-issue"></i>   &nbsp;Issued Books List</a>
  <a style="font-size: 18px;" href="User.php"><i class="fa fa-fw fa-user"></i>   &nbsp;Admin Panel</a>
  </div>
  
<div class="main">
<?php
                                    $bookid = $_GET['id'];
                                    $sql = "select * from LMS.book where Bookid='$bookid'";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    $name=$row['Title'];
                                    $publisher=$row['Publisher'];
                                    $year=$row['Year'];
                                    $avail=$row['Availability'];


                                ?>
<br><br><br>
<table class="container"
    style="table-layout: fixed; backdrop-filter: blur(10px); width: 100%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <td>
<form class="des" action="edit_book_details.php?id=<?php echo $bookid ?>" method="post">
                                        <div class="form-wrapper">
                                            <b>
                                            <label class="control-label" for="Title">Book Title:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Title" name="Title" value= "<?php echo $name?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="form-wrapper">
                                            <b>
                                            <label class="control-label" for="Publisher">Publisher:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Publisher" name="Publisher" value= "<?php echo $publisher?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="form-wrapper">
                                            <b>
                                            <label class="control-label" for="Year">Year:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Year" name="Year" value= "<?php echo $year?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="form-wrapper">
                                            <b>
                                            <label class="control-label" for="Availability">Availability:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Availability" name="Availability" value= "<?php echo $avail?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="button1" style="background: #2196F3">Update Details</button>
                                            </div>
                                        </div>

                                    </form><br></td></table>
                                    <?php
if(isset($_POST['submit']))
{
    $bookid = $_GET['id'];
    $name=$_POST['Title'];
    $publisher=$_POST['Publisher'];
    $year=$_POST['Year'];
    $avail=$_POST['Availability'];

$sql1="update LMS.book set Title='$name', Publisher='$publisher', Year='$year', Availability='$avail' where BookId='$bookid'";



if($conn->query($sql1) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=AllBooks.php", true, 303);
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