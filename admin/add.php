<?php
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
<link rel="stylesheet" href="css/button2.css">
<link rel="stylesheet" href="css/glossy.css">

<style>

body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg4.jpg); 
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
  background: white;
}
b{
color: darkslategray;  
}
form.des button {
  float: center;
  width: 30%;
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
<br><br><br>  <br>
<div class="main">
<table class="container"
    style="table-layout: fixed; backdrop-filter: blur(10px); width: 100%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <td>

<form class="des" action="add.php" method="post" >
                                        <div class="form-wrapper">
                                            <label class="control-label" for="Title" style="float: left;"><b>Book Title:&nbsp; </b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Title" class="span8" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-wrapper">
                                        <br><label class="control-label" for="Title" style="float: left;"><b>Author:&nbsp; </b></label>
                                            <div class="controls">
                                                <input type="text" id="author1" name="author1"  placeholder="Author" class="span8" required>
                                                <br><input type="text" id="author2" name="author2"   class="span8">
                                                <br><input type="text" id="author3" name="author3"   class="span8">

                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-wrapper">
                                        <br><label class="control-label" for="Publisher" style="float: left;"><b>Publisher:&nbsp; </b></label>
                                            <div class="controls">
                                                <input type="text" id="publisher" name="publisher" placeholder="Publisher" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                        <br><label class="control-label" for="Year" style="float: left;"><b>Year:&nbsp; </b></label>
                                            <div class="controls">
                                                <input type="text" id="year" name="year" placeholder="Year" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                        <br><label class="control-label" for="Availability" style="float: left;"><b>Number of Copies:&nbsp; </b></label>
                                            <div class="controls">
                                                <input type="text" id="availability" name="availability" placeholder="Number of Copies" class="span8" required>
                                            </div>
                                        </div>
             
                                       <div class="form-wrapper">
                                       <center><div class="controls">
                                            <button type="submit" name="submit"class="button1">Add Book</button>
                                            </div></center>
                                        </div>
                                    </form>

<?php
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $author1=$_POST['author1'];
    $author2=$_POST['author2'];
    $author3=$_POST['author3'];
    $publisher=$_POST['publisher'];
    $year=$_POST['year'];
    $availability=$_POST['availability'];

$sql1="insert into LMS.book (Title,Publisher,Year,Availability) values ('$title','$publisher','$year','$availability')";

if($conn->query($sql1) === TRUE){
$sql2="select max(BookId) as x from LMS.book";
$result=$conn->query($sql2);
$row=$result->fetch_assoc();
$x=$row['x'];
$sql3="insert into LMS.author values ('$x','$author1')";
$result=$conn->query($sql3);
if(!empty($author2))
{ $sql4="insert into LMS.author values('$x','$author2')";
  $result=$conn->query($sql4);}
if(!empty($author3))
{ $sql5="insert into LMS.author values('$x','$author3')";
  $result=$conn->query($sql5);}

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