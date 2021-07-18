<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
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
  <div  style="width: 100%; backdrop-filter: blur(10px);"> 
                    			
                    			<div class="card">

                                <?php
                                $rollno = $_SESSION['RollNo'];
                                $sql="select * from LMS.user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['Name'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                ?>    
                    				 
                    				<h3><center>Hello, <?php echo $name ?>!</center></h3>
                    				
                    				<p><b>Email ID: </b><?php echo $email ?></p>
                    				<br>
                    				<p><b>Username: </B><?php echo $rollno ?></p>
                    				<br>
                    				<p><b>Mobile number: </b><?php echo $mobno ?></p>
                    				</b>
                                

                    			</div>
                    		</div>
                            <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="edit_admin_details.php" class="button1">Edit Details</a>    
                            <a href="logout.php" class="button1" style="background-color:red">Log out</a>    
      					</center>              	
                    </div>
  </body>
  

  </html>

   
<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>