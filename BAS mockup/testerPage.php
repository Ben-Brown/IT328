<?php
session_start();
?>


<html>
<head>
    <title>BAS Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <style>
        .form-inline {
        padding:5px;
    }
        .form-inline > * {
        margin:10px 3px !important;
    }
    body {
        padding: 30px; 
      }
    </style>
</head>
<body>
    <div class="container">    
    	<h2>Contact Info</h2>
     
     <!--First and last names form-->
     <form class="form-inline" method="post" action="status.php" role="form">
       
     </form>
     
     <!--Email and Preferred Phone # form-->
     <form class="form-inline" action="page2.php" method="post" role="form">
     <div class="form-group">
         <label for="First">First:</label>
         <input type="text" class="form-control" id="first" name="fname" placeholder="First">
       </div>
       <div class="form-group">
         <label for="last">Last:</label>
         <input type="text" class="form-control" id="last" name="lname" placeholder="Last">
       </div>
       <div class="inline-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email" name="email" placeholder="Email">
       </div>
       <div class="inline-group">
         <label for="phone">Preferred Phone:</label>
         <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
         <input type="number" class="form-control" id="sid" name="sid" placeholder="Student ID">
       </div>

	    <!--Radio buttons to choose degree plan-->
	    <div class="radio">
	        <label><input type="radio" name="degree" value="SD" checked="checked">Software Development</label>
	    </div>
	    
	    <div class="radio">
	        <label><input type="radio" name="degree" value="NAS">Network Administration & Security</label>
	    </div>
	    
	    <div class="radio">
	        <label><input type="radio" name="degree" value="NA">Undecided</label>
	    </div>
	    
	    <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary center-block">Submit</button>
	</form>
    </div>

    </body>
</html>
