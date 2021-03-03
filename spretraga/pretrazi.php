<!DOCTYPE html>
<html lang="en-EN" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8" />
<title>Search</title>
<link href="../pretraga/pretrazi.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="main">
<h1>Enter Search:</h1>
<div id="search">
<button class="btn" onClick="location.href='../student.php';">&#60&#60 &nbsp Return</button>
<form name="search" method="POST" action="trazi.php">
<input type="text" name="search_name" placeholder="Enter name" value="" />
<input type="text" name="search_surname" placeholder="Enter surname" value="" />	
<input type="submit" name="submit" value="Search Class" />
</form>
</div>
</div>
</body>
</html>