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
                <div class = "navbar">
                    <img src="pgs_logo.png" class = "navlogo">
                    <a class = "navbar_text" href = "login.php">login</a>
                    <a class = "navbar_text" href = "register.php">register</a>
                    <a class = "navbar_text" href = "index.php">play</a>
                    <a class = "navbar_text" href = "mygames.php">mygames</a>
                    <a class = "navbar_text" href = "profile.php">profile</a>
                    <a class = "navbar_text" href = "testgame.php">testgame</a>
                </div>
                <?php
                if(isset($_SESSION['user'])) {
                  echo "<div>{$_SESSION['user']}</div>";
                 }
                ?>
                <div id = "create_game_div">
                    <button type = "button" id = "create_game_button">Create Game</button>
                </div>
                <div id = "open_games_div">
                    <p id = "open_games_title">Open Games</p>
                    <div id = "open_games_bar">
                        <input type="text" id="search" name="search" class = "open_games_bar_search" placeholder = "Search by Username...">
                        <p class = "open_games_bar_username">Username</p>
                        <p class = "open_games_bar_timecontrol">Time Control</p>
                    </div>
                    <hr class = "open_games_line">
                    <div class = "open_games_list">
                        <div class = "open_game">
                            <button type = "button" class = "accept_game_button">Accept</button>
                            <p class = "open_game_username">ExampleUsername1</p>
                            <p class = "open_game_timecontrol">Normal</p>
                        </div>
                        <div class = "open_game">
                            <button type = "button" class = "accept_game_button">Accept</button>
                            <p class = "open_game_username">Short1</p>
                            <p class = "open_game_timecontrol">Blitz</p>
                        </div>
                        <div class = "open_game">
                            <button type = "button" class = "accept_game_button">Accept</button>
                            <p class = "open_game_username">MediumLen</p>
                            <p class = "open_game_timecontrol">Long</p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class = "footer">
                <p>&copy; Don't actually have a copyright.     |     contact: kyleworley@u.boisestate.edu</p>
            </footer>
	    </div>
	</body>
</html>