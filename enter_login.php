
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
        include("admins_database.php");
 
    ?>
    
    <center>
    <form action="add_admin.php" ">
      
    <style>
                #aa {
                  padding: 6px 10px; margin-top: 0px;margin-right: 16px;
                    background-color: #555;color: white;font-size: 17px;border: none;cursor: pointer;
                  }

                #aa:hover {
                  background-color: green;
                }
    </style>


      <button id="aa" class="button button1" 
                    >Add New Admin </button>
    </form>
    <br> <br> 

    <a href="add_book.php" > <button id="aa">Add new book</button> </a>
    <br> <br> <br> <br>
    <a href="search_book.php"><button id="aa">search for the Book information </button></a>
    <br> <br> <br> <br>
    <a href="display_all.php"><button id="aa">List all books </button></a>
    <br> <br> <br> <br>
    <a href="index.php"><button id="aa">Logout </button></a>
</center>   
</body>
</html>