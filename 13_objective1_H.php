<?php

require("template_top.inc"); 
  
############################################################
#
# Immediate logic which looks for the downloaded cookie - i.e. that the file has already been downloaded. 
# If the cookie is set then a message is provided to the user indicating the file has already been downloaded.
# 
############################################################
 
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


############################################################
#
# This is the registration cookie. Cookie is good for a year
#
############################################################
function set_cookie()
{

	?>
	<head>
       		<link rel="stylesheet" href="6_objective2.css">
  		<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://jmurphy3.userworld.com/php%20-%20intro%20course/13_objective1_H.php">
 	</head>
 	<?       		
 	
	# Set the cookie here for the now registered user
 	$value = $_POST['name'];			
 	setcookie("name",$value, time()+ 31536000); 
 	

}

##################################################################
#
# This is the download cookie. Cookie is good for 7 days
#
##################################################################
function set_cookie_downloaded()
{
 	setcookie("downloaded", "downloaded", time()+ 604800);
}

##################################################################
#
# This is the register first function. An email addresss is required
# to be entered. When email address is properly entered it will call
# the download_software() function
# 
##################################################################
function register_first()
{
	?>
	<head>
       			<link rel="stylesheet" href="6_objective2.css">
 			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	
 	
 	
	You need to register first!<br/>	
	Please enter your email address to register:</br>  	
	<form action="" method="post">
  	<input type="text" size="25" name="name" value="" />
 
 	 <input type="hidden" name="submitted" value="1">  
 
	<input type="submit" name="submit_20" value="Submit" />
	</form>	 
  	<?
 
	# When the submit button is clicked the set_cookie function will be called
  	if (isset($_POST['submit_20']) && $_POST['submit_20'] == "Submit")
 	{
 		# Here I do some regexing to validate user input - to keep the overall interface clean and simple I use an alert to guide the user
 		# The regex below isn't exhaustive in weeding out the myriad of possible email permutations - catches 75% of the cases 
 		$email_to_verify = $_POST['name'];
  	 	if ( ! (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email_to_verify)) ) {
	 		?>
	 		<script>
	 			alert("Please enter a valid email address!");
	 		</script>
	 		<?
	 	}    	 	 	
	 	# Ok the user email address is validated and lets set the cookie
	 	else
	 	{
	 		set_cookie();
	  	}
	}
   	  	
}

##################################################################
#
# This is the download_software function. 
# If displays the download button. When the button is clicked it calls the set_cookie_downloaded() function to indicate that the user has downloaded the file. 
# If also calls the readfile() function to deliver the MP3 file.
# 
##################################################################     
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
		# This calls the set_cookie_downloaded function
		set_cookie_downloaded();

		# This sends the MP3 file to the client browser
		header('Content-disposition: attachment; filename=rock_this_town.mp3');
		header('ContentType = "audio/mpeg3"');
		readfile('rock_this_town.mp3');				
	}
	
}


       ###################################################################
       #
       # Logic for the hackers from 202.x.x.x land
       #
       ###################################################################       
    
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


       ###################################################################
       #
       # Logic if a valid browser and already registered with a cookie
       #
       ###################################################################
	
	# Windows machine with Firefox and registered
	# User Agent:Mozilla/5.0 (Windows NT 5.1; rv:9.0.1) Gecko/20100101 Firefox/9.0.1
       if ( preg_match("/Windows NT.*Firefox/", $_SERVER['HTTP_USER_AGENT'])  && ($_COOKIE['name']) )
       {

       		download_software();
       }
       # Macintosh.*Firefox/ and registered
       else if ( preg_match("/Macintosh.*Firefox/", $_SERVER['HTTP_USER_AGENT'])  && ($_COOKIE['name'])  )
       {
       		download_software();
       }
	# Windows machine with Internet Explorer and registered
	# User Agent:Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; MDDR; InfoPath.2)
       else if ( preg_match("/Windows NT.*\.NET/", $_SERVER['HTTP_USER_AGENT']) && ($_COOKIE['name']) )
       {
       		download_software();
       }
       ###################################################################
       #
       # Logic if a valid browser and needs to register because cookie does not exist
       #
       ###################################################################

       # Windows machine with Internet Explorer and has not registered yet
       else if ( preg_match("/Windows NT.*\.NET/", $_SERVER['HTTP_USER_AGENT']) && !($_COOKIE['name']) )
       { 	
 			register_first();
       }
       # Windows/Firefox and not registered yet
       else if ( preg_match("/Windows NT.*Firefox/", $_SERVER['HTTP_USER_AGENT'])  && !($_COOKIE['name']) )
       {
       			register_first();
       }
       # Macintosh.*Firefox/ and not registered yet
       else if ( preg_match("/Macintosh.*Firefox/", $_SERVER['HTTP_USER_AGENT'])  && !($_COOKIE['name'])  )
       {
	       		register_first();
       }   
       ###################################################################
       #
       # Logic for unsupported browser
       #
       ###################################################################       
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