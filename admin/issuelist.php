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
  width: 80%;
  background: #f1f1f1;
}

form.des button {
  float: left;
  width: 20%;
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
  
<div class="main">

<form class="des" action="issuelist.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Roll No of Student/Book Name/Book Id." class="span8" required>
                                                <button type="submit" name="submit"class="button1">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select record.BookId,RollNo,Title,Due_Date,Date_of_Issue,datediff(curdate(),Due_Date) as x from LMS.record,LMS.book where (Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId) and (RollNo='$s' or record.BookId='$s' or Title like '%$s%')";
                                        }
                                    else
                                        $sql="select record.BookId,RollNo,Title,Due_Date,Date_of_Issue,datediff(curdate(),Due_Date) as x from LMS.record,LMS.book where Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId";
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
                                      <th>Roll No</th>  
                                      <th>Book id</th>
                                      <th>Book name</th>
                                      <th>Issue Date</th>
                                      <th>Due date</th>
                                      <th>Dues</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                <?php

                            

                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $rollno=$row['RollNo'];
                                $bookid=$row['BookId'];
                                $name=$row['Title'];
                                $issuedate=$row['Date_of_Issue'];
                                $duedate=$row['Due_Date'];
                                $dues=$row['x'];
                            
                            ?>

                                    <tr>
                                      <td><?php echo strtoupper($rollno) ?></td>
                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><?php echo $issuedate ?></td>
                                      <td><?php echo $duedate ?></td>
                                      <td><?php if($dues > 0)
                                                  echo "<font color='red'>".$dues."</font>";
                                                else
                                                  echo "<font color='green'>0</font>";
                                              ?>
                                    </tr>
                            <?php }} ?>
                                    </tbody>
                                </table>

</div>
</body>

  

  </html>

  
<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>