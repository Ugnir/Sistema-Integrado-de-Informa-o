<?php
/* Displays all error messages */
session_start();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
</head>

<body>

    <h4>
        <?php 
        if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
            echo $_SESSION['message'];    
        else:
            header( "location: login.php" );
        endif;
        ?>
    </h4> 

</body>
</html>