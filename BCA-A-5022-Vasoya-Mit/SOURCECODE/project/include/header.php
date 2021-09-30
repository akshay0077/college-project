<?php @session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Voting System</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<img src="vote.jpg" height=100px weight=100px/>
			<!--<h1><a href="#">vote.jpg</a></h1>-->
		
		<?php if(isset($_SESSION['client']['status'])) {?>
			<li>
				<h2>hi,<?php echo $_SESSION['client']['fnm']; ?></h2>
				<?php echo $_SESSION['client']['id']; ?>
				
				<ul>
					<li><a href="logout.php">log out</a></li>
					
					</ul>
			</li>
			<?php } ?>
			</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="studentdetail.php" accesskey="2" title="">student detail</a></li>
			<?php 
			  if(! isset($_SESSION['client']['status']))
			  {
			   echo '<li><a href="login.php">Login</a></li>';
			  }
			?>				<li><a href="committee.php" accesskey="4" title="">Committee</a></li>
				<li><a href="candidate.php" accesskey="5" title="">Candidate</a></li>
				<li><a href="vote.php" accesskey="6" title="">vote</a></li>

			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<marquee><h2>Online Voting System</h2></marquee>
				