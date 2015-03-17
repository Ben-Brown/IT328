<?php
// page1.php

session_start();

echo 'Welcome to page #1';


$sid = $_SESSION['sid'];
echo $sid;
// Works if session cookie was accepted
echo '<br /><a href="testerPage.php">testerpage</a>';

// Or maybe pass along the session id, if needed
echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
?>