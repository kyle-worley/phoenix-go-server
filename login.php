<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="favicon.ico" type="image/ico"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    </head>
    <body class = "login_color">
        <div class = "page_container">
            <div class = "content">
                <img src="pgs_logo.png" height = 400px width = 400px class = "center">
                <div class = "title"><strong>P</strong>hoenix <strong>G</strong>o <strong>S</strong>erver</div>
                <form method = "post" action = "login_handler.php">
                    <input type="text" id="username" name="username" class = "text_input" placeholder = "Username">
                    <input type="password" id="password" name="password" class = "text_input" placeholder = "Password">
                    <h6 id = "register_link">Don't have an account yet? <a href = "register.php">Create an account</a></h6>
                    <input type="submit" value="Login" class = "center">
                </form>
                <?php
                    if(isset($_SESSION['errors'])) {
                        foreach($_SESSION['errors'] as $error) {
                            echo "<div class = 'error_message'>{$error}</div>";
                        }
                        unset($_SESSION['errors']);
                    }
                ?>
            </div>
            <footer class = "footer">
                <p>&copy; Don't actually have a copyright.     |     contact: kyleworley@u.boisestate.edu</p>
            </footer>
	    </div>
	</body>
</html>