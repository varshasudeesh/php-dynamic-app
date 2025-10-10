<!DOCTYPE HTML>
<html>
<head>
<title> VIEW BOOKS  </title>
<style>
body
{background-image: url("https://img.freepik.com/free-vector/leaves-background-with-metallic-foil_79603-914.jpg?semt=ais_hybrid&w=740&q=80");
background-size: cover;    
}
table
{background-color:#FFB5C0;
padding:20px;
border-radius:8px;
opacity:0.8;
max-width:1200px;
margin: 150px auto 0 auto;
width:70%;
 border-collapse: collapse;
}
th,td
{border:2px solid;
padding:10px;
}
</style>
</head>
<body>
<?php
require 'db_connection.php';
$sql="select * from books";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0)
{echo "<table border='1'>
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Year</th>
<th>ISBN</th>
<th>Action</th>
</tr>";
while($row=mysqli_fetch_assoc($result))
{echo "<tr>
<td>".$row['book_id']."</td>
<td>".$row['title']."</td>
<td>".$row['author']."</td>
<td>".$row['year_published']."</td>
<td>".$row['isbn']."</td>
<td> <a href='update_book.php?id=".$row['book_id']."'>Edit</a> | <a href='delete_book.php?id=".$row['book_id']."'>Delete</a>
</td>
</tr>";
}
echo "</table>";
}
else
{echo "No books found";
}
mysqli_close($connection);
?>
</body>
</html>