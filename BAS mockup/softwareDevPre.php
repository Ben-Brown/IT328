<?php
    //*** Start a session
    session_start();
    //*** Start the buffer
    ob_start();
    
?>
<h2>Prerequisites</h2>
	<p id="program">
		<?php if ($_SESSION['degree'] == 'SD'){
		echo 'Software Development <br>Program Prerequisites'; 
		}
		else {
			echo 'Network Administration and Security <br>Program Prerequisites';
		}
	?></p><br>
		<p>Please check all that you have completed.</p>
		<small id="note">Note: If you do not meet all of the prerequisites, or have extensive industry experience, an advisor will contact you to discuss options.</small>
		<?php 
			if ($_SESSION['degree'] == 'SD'){
				echo '<form action="Education.php" class="form-group" >
					<div class="checkbox">
						<label>
							<input type="checkbox">Programming 1 and Programming 2 (CSCI 141&145 or CSCI 131&132)
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox">IT 210: Database Fundementals, or equivalent. 
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox">IT 190: Intro to Linux or LPI1 or Linux Essentials
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox">IT 121: HTML/CSS or equivalent
						</label>
					</div>'; 
			}
			else {
				echo '<form action="Education.php" class="form-group" >
					<div class="checkbox">
						<label>
							<input type="checkbox" name="IT210">IT 210 or CCENT
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name = "IT160">IT 160 or MTA 
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="IT190">IT 190: Intro to Linux or LPI1 or Linux Essentials
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="IT102">IT 102 or programming course
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="IT240">IT 240 or 70-411 Microsoft MCP
						</label>
					</div>';
			} ?>
			<p>Comments:</p>
			<textarea name="prereq-comments" id="prereq-comments" rows="4" class="form-control"></textarea> <br>
			<button class="btn btn-primary btn-lg" type="submit">Continue</button>
			
			</form>
<?php
 //Flush buffer
 ob_flush();
?>
