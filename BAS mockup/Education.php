<?php
    //*** Start a session
    session_start();
    //*** Start the buffer
    ob_start();
    
?>

<!DOCTYPE html>

<html>
<head>
    <title>Education</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!--<script src="javascript/education.js"></script>-->
    <style>
        .radio{
            margin-left: 4%;
        }
        
        .container {
	    max-width: 850px; 
	    background-color: #ddd;
	    border-radius: 0 0 5px 5px;
	}
        #agreeComplete{
            position: inherit;
            margin-left: 1%;
            }
        #collegeCredits{
            width: 5em;
        }
	
    </style>
    
</head>

<body>
    <div class="container">
        <h1 class="text-center">Education</h1>
        <form id="eduForm" name="eduForm" role="form" action="sendEmail.php" class="form-group">
            <label class="input-lg">Select highest degree achieved:</label>
            <div class="radio">
                <label>
                    <input type="radio" required  name="optionsRadios" checked="checked" id="optionsRadios" value="High school diploma or GED"> High school diploma or GED
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" required name="optionsRadios" id="optionsRadios" value="Associate's degree (AA,AS,AAS,AAS-T)"> Associate's degree (AA,AS,AAS,AAS-T)
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" required name="optionsRadios" id="optionsRadios" value="Bachelor's degree"> Bachelor's degree
                </label>
            </div>
            <div class="radio">    
                <label>
                    <input type="radio" required name="optionsRadios" id="optionsRadios" value="Master's degree"> Master's degree
                </label>
            </div>
            <div class="radio">    
                <label>
                    <input type="radio" required name="optionsRadios" id="optionsRadios" value="Ph.D."> Ph.D.
                </label>
            </div>
            
            <div class="row">
                <label for="collegeCredits" class="col-sm-5 control-label input-lg">How many college credits have you earned?</label>
                <div class="col-sm-1">
                    <input type="number" class="input-lg" id="collegeCredits" name="collegeCredits"  min= 0 max= 999 value = 0 required>
                </div>
            </div>
            <br>
            <div class="row">
                <label for="unofficialTranscripts" class="col-sm-10 control-label input-lg">Upload unofficial transcripts from any college other than Green River.</label>
                <div class="col-sm-1">
                    <button class="btn btn-primary" id="upload" name="upload" type="file">Upload</button>
                </div>
            </div>
            <br>
             <div class="row">
                <div class="checkbox">
		    <div class="col-sm-1">
                        <input id="agreeComplete" name="agreeComplete" type="checkbox" class="input-md form-control" required>
                    </div>
		    <div class="col-sm-10">
			<label for="agreeComplete" class="control-label input-lg">I verify that the information submitted here is accurate and complete.</label>
		    </div>
                    
                    
                </div>
           </div>
            <button class="btn btn-primary btn-lg"  id="submit" type="submit">Finish</button>
            
        </form>

        
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	

	var uploadDoc = document.getElementById('upload');
	uploadDoc.onclick= function(){
		alert("Imagine a beautiful file UI for uploading!");
	    };
	
	
	var submitForm = document.getElementById('submit');
	submitForm.onsubmit= validateForm;

	
	
	    function validateForm()
	    {
		var isValid = true;
		var form = document.getElementById('eduForm');
		
		var valueRadio = checkRadio(form.optionsRadios);
		
		if (!form.agree.checked){
		    return isValid = false;
		}
	
		
		if (!form.collegeCredits.value < 0 || !form.collegeCredits.value >= 999) {
		    return isValid = false;
		}
		
		if(!valueRadio){
		    return isValid = false;
		}
		
		if (isValid) {
		    alert("valid");
		    return true;
		    
		    
		}else{
		    alert("Please fill information needed");
		    return false;
		    
		}
		
	    }
	    
	    function checkRadio(radioButton){
		for (var i=0; i < radioButton.length; i++){
		    if (radioButton[i].checked) {
			return radioButton[i].value;
		    }
		}
		return false;
	    }
	    
	   
	    
    </script>
</body>
</html>
<?php
 //Flush buffer
 //header_remove();
 ob_flush();
 //session_destroy()
 //unset($_SESSION['student']);
?>
