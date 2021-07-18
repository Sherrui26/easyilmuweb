<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html>
<head>
<title>Previously Borrowed</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/button2.css">
<link rel="stylesheet" href="css/table.css">
</head>

<style>

    body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg3.jpg);
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
    <a href="#"><i class="fa fa-fw fa-borrow"></i>  Previously Borrow</a>
    <a href="Recommend.php"><i class="fa fa-fw fa-recommend"></i>  Recommend Books</a>
    <a href="Issue.php"><i class="fa fa-fw fa-issue"></i>  Currently Issued Books</a>
    <a href="User.php"><i class="fa fa-fw fa-user"></i>  User Setting</a>
  </div>
  
  <div class="main">
    
    <!--Bahagian text - about us-->
      
    <form class="form-horizontal row-fluid" action="PreviouslyBorrowed.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Book Name/Book Id." class="span8" required>
                                                <button type="submit" name="submit"class="button1">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    $rollno = $_SESSION['RollNo'];
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from LMS.record,LMS.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NOT NULL and book.Bookid = record.BookId and (record.BookId='$s' or Title like '%$s%')";

                                        }
                                    else
                                        $sql="select * from LMS.record,LMS.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NOT NULL and book.Bookid = record.BookId";

                                    $result=$conn->query($sql);
                                    $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                    	echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                    ?>
                        <table class="zui-table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book id</th>
                                      <th>Book name</th>
                                      <th>Issue Date</th>
                                      <th>Return Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                <?php

                            
                            while($row=$result->fetch_assoc())
                            {
                                $bookid=$row['BookId'];
                                $name=$row['Title'];
                                $issuedate=$row['Date_of_Issue'];
                                $returndate=$row['Date_of_Return'];                            
                            ?>

                                    <tr>
                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><?php echo $issuedate ?></td>
                                      <td><?php echo $returndate ?></td>
                                    </tr>
                            <?php }} ?>
                                    </tbody>
                                </table>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
  </div>
     
  
  
  </body>
  

  </html>

  
<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>