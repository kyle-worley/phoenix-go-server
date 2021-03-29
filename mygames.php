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
                <div id = "mygames_title_div">
                    <p id = "mygames_title">My Games</p>
                    <div id = "mygames_filter_div">
                        <p id = "filterby">Filter games by...</p>
                        <div id = "mygames_timecontrol">
                            <input type="checkbox" id="blitz" value="Blitz">
                            <label class = "timecontrol" for="blitz">Blitz</label>
                            
                            <br>
                            <input type="checkbox" id="normal" value="Normal">
                            <label class = "timecontrol" for="normal">Normal</label>
                            
                            <br>
                            <input type="checkbox" id="long" value="Long">
                            <label class = "timecontrol" for="long">Long</label>
                        </div>
                        <div id = "mygames_turncontrol">
                            <input type="checkbox" id="myturn" value="MyTurn">
                            <label class = "turncontrol" for="myturn">My Turn</label>
                            <br>
                            <input type="checkbox" id="theirturn" value="TheirTurn">
                            <label class = "turncontrol" for="theirTurn">Their Turn</label>
                        </div>
                    </div>
                </div>
                <div id = "my_games_div">
                    <div id = "my_games_bar">
                        <input type="text" id="search" name="search" class = "my_games_bar_search" placeholder = "Search by Username...">
                        <p class = "my_games_bar_username">Opponent</p>
                        <p class = "my_games_bar_timecontrol">Time Control</p>
                        <p class = "my_games_bar_whoseturn">Whose Turn?</p>
                    </div>
                    <hr class = "my_games_line">
                    <div class = "my_games_list">
                        <div class = "my_game">
                            <button type = "button" class = "goto_game_button">Open</button>
                            <p class = "my_game_username">ExampleUsername1</p>
                            <p class = "my_game_timecontrol">Normal</p>
                            <p class = "my_game_whoseturn">My Turn</p>
                        </div>
                        <div class = "my_game">
                            <button type = "button" class = "goto_game_button">Open</button>
                            <p class = "my_game_username">Short1</p>
                            <p class = "my_game_timecontrol">Blitz</p>
                            <p class = "my_game_whoseturn">My Turn</p>
                        </div>
                        <div class = "my_game">
                            <button type = "button" class = "goto_game_button">Open</button>
                            <p class = "my_game_username">MediumLen</p>
                            <p class = "my_game_timecontrol">Long</p>
                            <p class = "my_game_whoseturn">Their Turn</p>
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