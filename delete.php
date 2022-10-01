<?php include('books_database.php'); ?>
<?php $page_title = 'Delete an ISBNea'; ?>
<?php $page_heading = 'The Book Deleted'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
      body {
    margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: darkcyan;
}
 .topnav {
  overflow: hidden;
  background-color: #333;
}

</style>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>

</head>

<body>
    <div class="topnav">
        <center>
        <h1 style="color:white">
            Simple Library Management System
        </h1>
        </center>
    </div>
    <h1> <?php echo $page_heading; ?> </h1>
    <p> <a href="enter_login.php">Go back to the homepage</a> </p>

    
    <?php $ISBN = $_GET['id'] ?>
    

    <?php $sql = "DELETE FROM book_info WHERE isbn =$ISBN" ;

    $result = mysqli_query($db,$sql);
        ?>
    <div style="background:red;color:white;padding:10px">
        <p>The Book is deleted</p>
    </div>
  

</body>

</html>