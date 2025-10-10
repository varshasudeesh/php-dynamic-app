<!DOCTYPE HTML>
<html>
<head>
<title> DELETE BOOK </title>
<style>
body
{background-image: url("https://img.freepik.com/free-vector/leaves-background-with-metallic-foil_79603-914.jpg?semt=ais_hybrid&w=740&q=80");
background-size: cover;    
}
.container {
background-color: #d1e7dd;
max-width: 600px;
margin: 200px auto 0 auto;
padding: 40px;
border-radius: 12px;
box-shadow: 0 0 15px rgba(0,0,0,0.2);
opacity: 0.9;
text-align: center;
}
p {
font-size: 18px;
color: #2d3436;
 margin-bottom: 30px;
}
a {
text-decoration: none;
font-weight: bold;
padding: 10px 25px;
border-radius: 8px;
margin: 0 10px;
}

</style>
<body>
<div class="container">
<?php
require 'db_connection.php';
$id=$_GET['id']??0;
if(isset($_GET['confirm']))
{
$sql="delete from books where book_id=$id";
if (mysqli_query($connection, $sql)) {
        echo "Book deleted successfully. <a href='view_books.php'>Back to Books</a>";
    } 
else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

}
else
{echo "<p>Do you want to delete this book? </p> <a href='delete_book.php?id=$id&confirm=1'>Yes</a> | <a href='view_books.php'>No</a>";
}
?>
</div>
</body>
</html>