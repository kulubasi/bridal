<?php
    session_start();//session is a way to store information (in variables) to be used across multiple pages.
    session_destroy();
    echo '<script type="text/javascript">alert("You have successfully logged out");window.location=\'../index.html\';</script>'; 
    // header('location:../../index.php');//use for the redirection to some page
?>  