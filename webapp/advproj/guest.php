<? require_once "header.php"; ?>

<head>
	<title>Guest panel</title>
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="green", allows you to change the colour of the text - other classes are: "blue", "orange", "red", "purple" and "yellow" -->
          <h1>Recreational <span class="green">Sports Management System</span></h1>
          <h2>Guest Panel</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Admin Home</a></li>
		  <li><a href="sports.php">Sports</a></li>
		  <li><a href="leagues.php">Leagues</a></li>
  		  <li><a href="game.php">Game Control</a></li>
          <li><a href="logout.php">Logout</a></li>
		  
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
        <h1>Guest Control</h1>

		<p>Welcome to the Guest Control Panel. You can view sports, leagues, games, and teams here. More features will be added soon!</p>
		<br>		
      </div>
    <div id="site_content_bottom"></div>
    </div>

  </div>
</body>
</html>

