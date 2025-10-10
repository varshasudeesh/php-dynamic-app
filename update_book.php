<!DOCTYPE HTML>
<html>
<head>
<title> UPDATE BOOK </title>
<style>
body
{background-image: url("https://img.freepik.com/free-vector/leaves-background-with-metallic-foil_79603-914.jpg?semt=ais_hybrid&w=740&q=80");
background-size: cover;    
}
form 
{background-color: #d1e7dd; 
padding:50px;
border-radius:8px;
opacity:0.8;
max-width:600px;
margin: 50px auto 0 auto;
}
input[type="text"], input[type="number"]
{width: 100%;
padding: 8px;
margin: 10px 0;
border: 1px solid #ccc;
border-radius: 5px;

}
input[type="submit"]
{background-color:#FFB5C0;
color:black;
padding:12px 20px;
border-radius:8px;
font-size:18px;
display:block;
margin:20px auto;
}
</style>
</head>
<body>
<h1 style="text-align:center; margin-top: 50px;" > UPDATE BOOK </h1>
<?php
require 'db_connection.php';
$id=$_GET['id']??0;
$result=mysqli_query($connection,"SELECT * FROM books WHERE book_id=$id");
$row=mysqli_fetch_assoc($result);
?>
<form method="POST" action="">
TITLE: <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
AUTHOR: <input type="text" name="author" value="<?php echo $row['author']; ?>" required><br>
YEAR PUBLISHED: <input type="number" name="year_published" value="<?php echo $row['year_published']; ?>"><br>
ISBN: <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>"><br>
<input type="submit" name="update" value="Update">
</form>

<?php
if(isset($_POST['update']))
{$title = $_POST['title'];
$author = $_POST['author'];
$year_published = $_POST['year_published'];
$isbn = $_POST['isbn'];
$sql="update books set title='$title',author='$author',year_published='$year_published',isbn='$isbn' where book_id=$id";
if (mysqli_query($connection, $sql)) {
         header("Location: view_books.php");
    } 
else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
</body>
</html>