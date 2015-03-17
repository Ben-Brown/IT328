<?php
    //*** Start a session
    session_start();
    //*** Start the buffer
    ob_start();
    if (isset($_POST)){
	$_SESSION['degree'] = $_POST['degree'];
	if ($_POST['first'] != ""){
		$_SESSION['first'] = $_POST['first'];
	}
	if ($_POST['last'] != ""){
		$_SESSION['last'] = $_POST['last'];
	}
	if ($_POST['email'] != ""){
		$_SESSION['email'] = $_POST['email'];
	}
	if ($_POST['phone'] != ""){
		$_SESSION['phone'] = $_POST['phone'];
	}
}
    
?>
<!DOCTYPE html>

<html>
<head>
    <title>BAS More Info Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script>
		window.onload = function(){

		}
		function radioSelection(){
		if (this.val() == "current"){
			$('#current-student').removeClass('hidden');
		}
		else {
			$('#current-student').addClass('hidden');
		}
	}
	</script>
</head>
    
<body>
<div class="container">    
    <h2 class="text-center">Tell Us More</h2>
    <div class="wholeThing"> 
        <form class="form-inline" method="post" action="PrerequisitsSoftDev.php" role="form" >
            <div class="form-group">
                <fieldset><legend>Please Select One:</legend>					
					<input type="radio" value="current" name="status" class="checked" >
						<label for="status1">I am currently a student at Green River</label><br>
					<div id="current-student" class="hidden">
						<label for="sid" class="control-label">Student ID:&nbsp;</label>
						<input type="text" class="form-control" id="sid" name="sid" placeholder="must be 9 characters" maxlength="9"><span id="sid-length" class="glyphicon glyphicon-remove-circle"></span>
					</div>
					<input type="radio" value="new" name="status">
						<label for="status2">I am a new student</label>
				</fieldset>
            </div>
        
    
		<!--Check boxes to choose statuses-->
			<div class="category">          
				<fieldset>
				<legend>I am a (please check all that apply):</legend>
					<input type="checkbox" value="veteran" name="stats[]" >
								<label>Veteran</label><br>
					<input type="checkbox" value="international" name="stats[]" >
								<label>International student</label><br>
					<input type="checkbox" value="running-start" name="stats[]" >
								<label>Running Start student</label><br>
				</fieldset>
			</div>
			<label class="control-label" for="singlebutton"></label>
				<button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary center-block disabled" value="Continue">Continue</button>
		
		</form>
	</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="status.js"></script>
</body>
<?php
 //Flush buffer
 ob_flush();
?>