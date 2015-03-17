<?php
    session_start();
    session_destroy();
 ?>

<!DOCTYPE html>

<html>
<head>
    <title>BAS Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"></script> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></script>    
    
</head>
    
<body>
<div class="container">    
    <h2 class="text-center">Contact Info</h2>
    <div class="wholeThing"> 
        <form class="form-inline" method="post" action="status.php" role="form">
            <div class="form-group">
                <label for="First">First:&nbsp</label>
                <input type="text" class="form-control" name="first" placeholder="First">
            </div>
            <div class="form-group">
                <label for="last">Last:&nbsp&nbsp&nbsp</label>
                <input type="text" class="form-control" name="last" placeholder="Last">
            </div>
            <div class="inline-group">
                <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">&nbsp
                <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
    
    <!--Radio buttons to choose degree plan-->
        <div class="radioBtn">
         
            <div class="deadlines">
                <!--Make th padding different from td-->
                <p class="dead">Financial Aid Deadlines</p>
                <table>
                        <tr>
                            <td>Fall quarter:</td>
                            <td>&nbsp&nbsp&nbspAug 15</td>
                        </tr>
                        <tr>
                            <td>Winter quarter:</td>
                            <td>&nbsp&nbsp&nbspDec 15</td>   
                        </tr>
                        <tr>
                            <td>Spring quarter:</td>
                            <td>&nbsp&nbsp&nbspMar 15</td>  
                        </tr>
                        <tr>
                            <td>Summer quarter:</td>
                            <td>&nbsp&nbsp&nbspJune 1</td>   
                        </tr>
                    </div>
                </table>
            </div>
         
         
        <p>What degree are you interested in?</p>
            
            
                <input type="radio" id="SD" name="degree" value="SD">Software Development
                <span class="degreeHighlights">
	                <a id="popover" data-trigger="hover" href="Degree website is here">Learn More</a>
	                
	                <div>
	                    <p><b>We prepare students for the real world by teaching the high demand skills that employers 
	                    are seeking</b></p>
	                    <ul>
	                        <li>C, C++</li>
	                        <li>Java</li>
	                        <li>Web Development & Design</li>
	                    </ul>
	                    <p><b>Gain hands on experience</b>
	                    </p>
	                    <ul>
	                        <li>Learn how to code in our computer-labs</li>
	                        <li>Receive one-on-one instructor assistance</li>
	                        <li>Develop and design real websites</li>
	                        <li>Build a portfolio eith your code</li>
	                    </ul>
	                    <p><b>Make yourself invaluable with a well-rounded skill set.</b></p>
	                    <ul>
	                        <li>Be a self-sufficient programmer</li>
	                        <li>Create efficient and reliable programs</li>
	                        <li>Build development environments</li>
	                    </ul>    
	                    <a href="http://www.greenriver.edu/academics/divisions/technology/it-programs/it-
	                    programs/degrees/bas-software-development.htm">Program Details </a>
	                </div><br>
	               
                </span> 
                
            
           <input type="radio" id="NAS" name="degree" value="NAS">Network Security & Administration
                <span class="degreeHighlights">
	        <a id="popover" data-trigger="hover" href="Degree website is here">Learn More</a>
                <div>
                    <p><b>We prepare students for the real world by teaching the high demand skills that employers 
                    are seeking</b></p>
                    <ul>
                        <li>PC Repair</li>
                        <li>Windows Server Administration</li>
                        <li>Newtwork Security</li>
                    </ul>
                    <p><b>Gain hands on experience</b>
                    </p>
                    <ul>
                        <li>Use active routing hardware in our fully equipped labs</li>
                        <li>Receive one-on-one instructor assistance</li>
                        <li>Build a portfolio</li>
                    </ul>
                    
                    <p><b>Make yourself invaluable with a well-rounded skill set.  Learn how to:</b></p>
                    <ul>
                        <li>Install and configure servers</li>
                        <li>Monitor network traffic</li>
                        <li>Secure network devices</li>
                    </ul>
                    <a href="http://www.greenriver.edu/academics/divisions/technology/it-programs/it-
                    programs/degrees/bas-network-administration-and-security.htm">Program 
                    Details</a>
                </div>
             </span>
             <div>
                    <input type="radio" name="degree" value = "NA" checked="checked">Undecided
            </div>
            </div>
            </div>   
        </div>
        <label class="control-label" for="singlebutton"></label>
                <button id="singlebutton" name="singlebutton" class="btn btn-primary center-block">
                Continue
                </button>

        </form>
</div>

<script>
    var span = document.querySelectorAll('.degreeHighlights');
    for (var i = span.length; i--;) {
        (function () {
        var t;
        span[i].onmouseover = function () {
            hideAll();
            clearTimeout(t);
            this.className = 'degreeHighlightsHover';
    };
        span[i].onmouseout = function () {
                var self = this;
                t = setTimeout(function () {
                self.className = 'degreeHighlights';
            });
            };
        })();
        }
    
    function hideAll() {
    for (var i = span.length; i--;) {
    span[i].className = 'degreeHighlights'; 
    }
};</script>     