<?php
    //*** Start a session
    session_start();
    //*** Start the buffer
    ob_start();
    
    $student = $_SESSION['student'];
    
    if($student == "current"){
        header('Location: currentStudentEmail.html');
        exit;
    }else if($student == "new"){
        header('Location: newStudentEmail.html');
        exit;   
    }else {
        header('location: oops.html');
        exit;
    }
    
    
    //*** Flush session
    ob_flush();
?>