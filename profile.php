<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit;
    }
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
                <div class = "navbar">
                    <img src="pgs_logo.png" class = "navlogo">
                    <a class = "navbar_text" href = "index.php">play</a>
                    <a class = "navbar_text" href = "mygames.php">mygames</a>
                    <a class = "navbar_text" href = "profile.php">profile</a>
                    <a class = "navbar_text" href = "testgame.php">testgame</a>
                    <a class = "navbar_text" href = "logout.php">logout</a>
                </div>
                <?php
                if(isset($_SESSION['user'])) {
                  echo "<div>Logged in as: {$_SESSION['user']}</div>";
                 }
                ?>
                <div id = "profile_page">
                    <div id = "userdiv">
                        <p id = "profile_page_username">My_Username</p>
                        <img src = "profile_pic.png" id = "profile_page_image">
                        <p id = "edit_profile_picture">edit profile picture</p>
                    </div>
                    <div id = "change_password_div">
                        <p id = "change_password">Change Password</p>
                        <form>
                            <input type="text" id="old_password" name="old_username" class = "text_input" placeholder = "Old Password">
                            <input type="password" id="new_password" name="new_password" class = "text_input" placeholder = "New Password">
                            <input type="password" id="retype_new_password" name="retype_new_password" class = "text_input" placeholder = "Re-type New Password">
                            <br>
                            <input type="submit" value="Save" class = "center">
                        </form>
                    </div>
                </div>
            </div>
            <footer class = "footer">
                <p>&copy; Don't actually have a copyright.     |     contact: kyleworley@u.boisestate.edu</p>
            </footer>
	    </div>
	</body>
</html>