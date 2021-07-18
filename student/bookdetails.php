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

<style>

body {
      font-family: "Lato", sans-serif;
      background-image: url(img/bg4.jpg); 
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
    <br><br><br>
    
    <a href="home.php"><i class="fa fa-fw fa-home"></i>  Home</a>
    <a href="booklist.php"><i class="fa fa-fw fa-book"></i>  All Books</a>
    <a href="PreviouslyBorrowed.php"><i class="fa fa-fw fa-borrow"></i>  Previously Borrow</a>
    <a href="Recommend.php"><i class="fa fa-fw fa-recommend"></i>  Recommend Books</a>
    <a href="Issue.php"><i class="fa fa-fw fa-issue"></i>  Currently Issued Books</a>
    <a href="User.php"><i class="fa fa-fw fa-user"></i>  User Setting</a>
  </div>
  
<div class="main">


<?php
                            $x=$_GET['id'];
                            $sql="select * from lms.book where BookId='$x'";
                            $sql1="select * from LMS.author where BookId='$x'";
                            $result=$conn->query($sql);

                            $rowcount=mysqli_num_rows($result);

                      if(!($rowcount))
                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                          else
                          {          
                                    ?> 
<br><br><br><br><br><br><br><br>
                     <table class="zui-table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book ID</th>
                                      <th>Author</th>
                                      <th>Title</th>
                                      <th>Publisher</th>
                                      <th>Year</th>
                                      <th>Availability</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php

                               
$result1=$conn->query($sql1);

while($row1=$result1->fetch_assoc())
{
  $author=$row1['Author'];
}

                                   while($row=$result->fetch_assoc())
                                   {  
                            
                                $bookid=$row['BookId'];
                                
                                $name=$row['Title'];
                                $publisher=$row['Publisher'];
                                $year=$row['Year'];
                                $avail=$row['Availability'];

                                ?>
   
                                <tr>
                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $author ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><?php echo $publisher ?></td>
                                      <td><?php echo $year ?></td>
                                      <td><?php echo $avail ?></td>

                                      <?php }} ?>
                               </tbody>
                                </table>
                                
                                <br>

                                    
                            
                        <a href="AllBooks.php" class="button1">Go Back</a> 

                        <?php
                                      	if($avail > 0)
                                      		echo "<a href=\"issue_request.php?id=".$bookid."\" class=\"button2\" style=\"float:right\">Issue</a>";
                                        ?>


</div>

</body>

  

  </html>

  
<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>