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
	?>
	<head>
       		<link rel="stylesheet" href="6_objective2.css">
 		<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	<?       		
 	
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

    
	# Try to throw hackers off the path.
	# Block any traffic to the download link that originates off of the 202 A octet (of A.B.C.D) in the IP address
	if ( preg_match("/202\.\d+\.\d+\.\d+/", $_SERVER['HTTP_X_FORWARDED_FOR'] ))
	{	
		echo "<head>";
	        echo '<link rel="stylesheet" href="6_objective2.css">';
		echo "</head>";
		echo "<body>";
		echo '<h2 id="pardon">Pardon our dust!<h2>';
		echo "<br/>";
		echo "The Server is currently in a maintenance state";
		echo "<br/>";
		echo "Please visit another time - thank you!";
		echo "<br/>";
		echo '<img src="https://encrypted-tbn3.google.com/images?q=tbn:ANd9GcTI9rRH7mpTn7-TrcplypZ00RmBrGRHZK4hbzem70vkdjdB7-zOgw">';
		echo '<br/>';
		echo "</body>";
		exit();
	}


	# Logic to make certain we have the desired OS and web browser:
	
	# Windows machine with Firefox
	# User Agent:Mozilla/5.0 (Windows NT 5.1; rv:9.0.1) Gecko/20100101 Firefox/9.0.1
       if ( preg_match("/Windows NT.*Firefox/", $_SERVER['HTTP_USER_AGENT']) )
       {
       	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	<?
       		download_software();
       }
       # Macintosh.*Firefox/
       else if ( preg_match("/Macintosh.*Firefox/", $_SERVER['HTTP_USER_AGENT']) )
       {
       	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	<?
       		download_software();
       }
	# Windows machine with Internet Explorer
	# User Agent:Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; MDDR; InfoPath.2)
       else if ( preg_match("/Windows NT.*\.NET/", $_SERVER['HTTP_USER_AGENT']) && ($_COOKIE['name']) )
       {
       	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	<?
       		download_software();
       }
       else if ( preg_match("/Windows NT.*\.NET/", $_SERVER['HTTP_USER_AGENT']) && !($_COOKIE['name']) )
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
       		echo "<head>";
       		echo '<link rel="stylesheet" href="6_objective2.css">';
       		echo "</head>";
       		echo "<body>";
       		echo "<h3>Invalid Browser/Operating System Combination</h3>";
       		echo "<br/>";
       		echo "Sorry, but we need you to use a valid browser. Please download the appropriate browser for your operating system:";
       		echo "<br/>";
       		echo '<a href="http://download.cnet.com/mozilla-firefox/?tag=mncol;5">Mozilla Firefox for Windows</a>';
       		echo "<br/>";
       		echo '<a href="http://download.cnet.com/Mozilla-Firefox/3000-2356_4-10208569.html?tag=mncol;1">Mozilla Firefox for Mac</a>';
       		echo "<br/>";
       		echo '<img src="http://3.bp.blogspot.com/-qmqKGyIjUXI/TzgPY0tXaMI/AAAAAAAANsw/YeN2gaOKSg8/s1600/dd.jpg">';
        	echo "</body>";
       		exit();
       }
       
       include($_SERVER['DOCUMENT_ROOT']."/template_bottom.inc");

?>