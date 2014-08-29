<?php

require($_SERVER['DOCUMENT_ROOT']."/template_top.inc"); 

 
if (isset($_COOKIE["downloaded"]))
{
	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
	You have already downloaded this file!</h3><br/>	
 	<?
	exit();
}


function set_cookie()
{
	# Set the cookie here for the now registered user
 	$value = $_POST['name'];			
 	setcookie("name",$value, time()+3600*24); 
}


function set_cookie_downloaded()
{
 	setcookie("downloaded", "downloaded", time()+3600*24*365);
}


function register_first()
{
	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
	You need to register first!<br/>	
  	
	<form action="" method="post">
  	<input type="text" size="25" name="name" value="" />
	<input type="submit" name="submit_20" value="Submit" />
	</form>	 
  	<?

	# When the submit button is clicked the set_cookie function will be called
 	if (isset($_POST['submit_20']) && $_POST['submit_20'] == "Submit")
 	{
 		set_cookie();
  	}
}
     
function download_software() 
{
	?>
		<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 		</head>
	
		<body>
			<h3>All Systems Go!</h3>
			<br/>
				<img src="https://encrypted-tbn2.google.com/images?q=tbn:ANd9GcSbsAyc5pCbPC0Snke5fXnv-1jjPl7ocgz6G-QQzzf_K0DTaxz2ng"></img>
			<br/>
			<br/>
				Click on the button to download the software!
	 		<br/>
	 		<br/>
  	 			<form action="" method="POST" >
					<input type="submit" name="submit_30" value="Download" />
				</form>
	 		<br/>
		</body>
	<?	

	# When the submit button is clicked the set_cookie_downloaded function will be called
	if ( isset($_POST['submit_30']) && $_POST['submit_30'] == "Download" )
	{
		set_cookie_downloaded();

		header('Content-disposition: attachment; filename=rock_this_town.mp3');
		header('ContentType = "audio/mpeg3"');
		readfile('rock_this_town.mp3');
			
		?>		
			<h1>We are here</h1>
		<? 
	
	}
	
}

    

      	if (!($_COOKIE['name']) )
       	{
	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	<?
       		register_first();
       	}
      	else
   	{
	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	<?
 		download_software();
 	}     	 
 
?>