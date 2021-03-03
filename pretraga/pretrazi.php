<!DOCTYPE html>
<html lang="en-EN" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8" />
<title>Search</title>
<link href="pretrazi.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="main">
<h1>Enter Search:</h1>
<div id="search">
<button class="btn" onClick="location.href='../students/student_dashboard.php';">&#60&#60 &nbsp Return</button>
<form name="search" method="POST" action="trazi.php">
<input type="text" name="search_box" placeholder="Enter Search...1st,2nd,3rd,4th" value="" />		
<input type="submit" name="submit" value="Search Class" />
</form>
</div>
</div>
</body>
</html>