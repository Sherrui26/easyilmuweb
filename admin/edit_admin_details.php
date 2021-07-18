<?php
ob_start();
require('dbconn.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>User Section</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/button2.css">
<link rel="stylesheet" href="css/table.css">
</head>

<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

    body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg7.jpg);
      background-attachment: fixed; 
      background-size: cover;
      display: grid;
      align-items: center;
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
   
        .card {  
            width: 90%;    
            height: 120%; 
          margin: 0 auto;
    margin-top: 80px;border: 1px solid #ccc;
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
    border-radius: 5px;
    position: relative;
    z-index: 1;
    background: inherit;
    overflow: hidden;
}

.card:before {
    content: "";
    position: absolute;
    background: inherit;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: inset 0 0 2000px rgba(221, 221, 221, 0.5);
    filter: blur(2px);
    margin: -20px;
  }

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
                                $rollno = $_SESSION['RollNo'];
                                $sql="select * from LMS.user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['Name'];
                                $category=$row['Category'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                $pswd=$row['Password'];
                                ?>    
                    			
                                <form class="contact2-form validate-form" action="edit_admin_details.php?id=<?php echo $rollno ?>" method="post">
                                <div class="card">
                                    <div class="wrap-input2 " >
                                        <label class="input2" for="Name"><b>Name:</b></label>
                                        <div class="controls">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="Name" name="Name" value= "<?php echo $name?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="wrap-input2">
                                        <label class="input2" for="EmailId"><b>Email Id:</b></label>
                                        <div class="controls">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="EmailId" name="EmailId" value= "<?php echo $email?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="wrap-input2 ">
                                        <label class="input2" for="MobNo"><b>Mobile Number:</b></label>
                                        <div class="controls">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="MobNo" name="MobNo" value= "<?php echo $mobno?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="wrap-input2 ">
                                        <label class="input2" for="Password"><b>New Password:</b></label>
                                        <div class="controls">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" id="Password" name="Password"  value= "<?php echo $pswd?>" class="span8" required>
                                        </div>
                                    </div>   
                                    <div >
                                            <div >
                                                <button type="submit" name="submit"class="button1"><center>Update Details</center></button>
                                            </div>
                                        </div>    
                                        <div>
                                        <div>
                                                <p> ‎</p>
                                            </div>
                                        </div>                                                                 
                                </div>
                                </form>
                    		   
<?php
if(isset($_POST['submit']))
{
    $rollno = $_GET['id'];
    $name=$_POST['Name'];
    $category=$_POST['Category'];
    $email=$_POST['EmailId'];
    $mobno=$_POST['MobNo'];
    $pswd=$_POST['Password'];

$sql1="update LMS.user set Name='$name', Category='$category', EmailId='$email', MobNo='$mobno', Password='$pswd' where RollNo='$rollno'";



if($conn->query($sql1) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=user.php", true, 303);
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>
      
  </body>
  

  </html>