<?php include("insert.php");?>
<!DOCTYPE html>
<html lang="sr-RS" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8" />
  <title>SCHOOLS NAME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="author" content="Dobrica Menković" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="noindex, nofollow" />
  <link href="images/logo.ico" rel="shortcut icon" type="image/x-icon"/>
  <link href="insert.css" rel="stylesheet" type="text/css" media="screen" />
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<div id="vraper">
  <div class="prijava" id="prijava">
  <h2>Insert New Teachers:</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="UTF-8" name="form" id="form" enctype="application/x-www-form-urlencoded">
    <p id="informacija"><?php echo $informacija;?></p>
    <input type="text" name="tfname" id="tfname" class="input" placeholder="first name teacher" required="required" aria-required="true" value="" />
    <input type="text" name="tlname" id="tlname" class="input" placeholder="last name teacher" aria-required="true" required="required" value="" />
    <input type="temail" name="temail" id="temail" class="input" placeholder="email" aria-required="true" required="required" value="" />
    <input type="tpassword" name="tpassword" id="tpassword" class="input" placeholder="password" aria-required="true" required="required" value="" />
    <input type="text" name="subject_name" id="subject_name" class="input" placeholder="subject" aria-required="true" required="required" value="" />
    <input type="text" name="class_name" id="class_name" class="input" placeholder="class" aria-required="true" required="required" value="" />
    <br />
    <input type="submit" name="submit" value="Save" id="submit" />
    <span id="minitel"><a href="../teacher.php">Display</a></span> 
  </form>
    <div id="status" class="clear"></div>
    <br /><br />
  </div>
</div>
  
</body>
</html>