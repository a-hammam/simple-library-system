<!DOCTYPE HTML>
<html>
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
<body bgcolor="87ceeb">
    <div class="topnav">
    <center><h1 style="color:white";>Simple Library Management System</h1></center>
    </div>
    <br>
 
    <?php
        include("books_database.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $Date=$_POST["Date"];


        $old_id = $_GET['id'];
        // $query = "insert into book_info(isbn,title,author,edition,Date) values('$isbn','$title','$author','$edition','$Date')"; //Insert query to add book details into the book_info table
        $query = "UPDATE book_info SET isbn = '$isbn', title = '$title', author = '$author', edition = '$edition', 
        Date = '$Date' WHERE isbn = $old_id";
        $result = mysqli_query($db,$query);
    ?>
    <center>
    <h3> Book information is <bold>updated</bold> successfully </h3>
 
    <a href="search_book.php"> To search for the Book information click here </a>
    </center>
</body>
</html>