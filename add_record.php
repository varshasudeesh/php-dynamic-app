<!DOCTYPE HTML>
<html>
<head>
<title> ADD BOOK FORM </title>
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
<h1 style="text-align:center; margin-top: 50px; "> LIBRARY MANAGEMENT SYSTEM </h1>
<form method="POST" action="insert_book.php">
TITLE: <input type="text" name="title" required><br>
AUTHOR: <input type="text" name="author" required><br>
YEAR PUBLISHED: <input type="number" name="year_published"><br>
ISBN: <input type="text" name="isbn"><br>
<input type="submit" value="Add Record">
</form>
</body>
</html>