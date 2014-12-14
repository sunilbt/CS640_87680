<!doctype html>
<html>
<head>
	<title>Track Ur City</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="../public/css/style.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Track Ur City</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-center">
	  <?php
	  if(!$user){
        echo '<li class="active"><a href="/project/index.php">Home <span class="sr-only">Home</span></a></li>
        <li><a href="/project/about.php">About</a></li>
		<li><a href="/project/signup.php">Sign Up</a></li>
		<li><a href="#">Source Code</a></li>';
	  }
	  else{
	   echo '<li><a href="/project/home.php">Home<span class="sr-only">Home</span></a></li>
	    <li><a href="/project/'.$user.'">Profile</a></li>
        <li><a href="/project/account_settings.php">Account Settings</a></li>
		<li><a href="/project/my_messages.php">My messages' . $unread_numrows . '</a></li>
		<li><a href="/project/friend_requests.php">Friend requests</a></li>
		<li><a href="/project/logout.php">Logout</a></li>';	  
	  }		?>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="" method="POST" id="search">
        <div class="form-group">
          <input type="text" class="form-control" name="search" size="45" placeholder="Search Members Using Email Address" onkeydown="searchq();">
        </div>
      </form>	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


      <ul id="output">
		
	  </ul>


