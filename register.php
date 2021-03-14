<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="favicon.ico" type="image/ico"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    </head>
    <body class = "login_color">
        <div class = "page_container">
            <div class = "content">
                <div class = "navbar">
                    <img src="pgs_logo.png" class = "navlogo">
                    <a class = "navbar_text" href = "login.php">login</a>
                    <a class = "navbar_text" href = "register.php">register</a>
                    <a class = "navbar_text" href = "index.php">play</a>
                    <a class = "navbar_text" href = "mygames.php">mygames</a>
                    <a class = "navbar_text" href = "profile.php">profile</a>
                    <a class = "navbar_text" href = "testgame.php">testgame</a>
                </div>
                <img src="pgs_logo.png" height = 400px width = 400px class = "center">
                <div class = "title"><strong>P</strong>hoenix <strong>G</strong>o <strong>S</strong>erver</div>
                <form>
                    <input type="text" id="create_username" name="create_username" class = "text_input" placeholder = "Create Username">
                    <input type="password" id="create_password" name="create_password" class = "text_input" placeholder = "Create Password">
                    <input type="password" id="retype_password" name="retype_password" class = "text_input" placeholder = "Re-type Password">
                    <h6 id = "register_link">Already have an account? <a href = "login.html">Login</a></h6>
                    <input type="submit" value="Create Account" class = "center">
                </form>
                <?php
                            require_once 'Dao.php';
                            $dao = new Dao();
                            $tables = $dao->createUsersTable();
                            foreach($tables as $table) {
                                echo print_r($table, 1);
                            }
                        ?>
            </div>
            <footer class = "footer">
                <p>&copy; Don't actually have a copyright.     |     contact: kyleworley@u.boisestate.edu</p>
            </footer>
	    </div>
	</body>
</html>