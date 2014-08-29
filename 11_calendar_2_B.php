<html>
<head>
	<link rel="stylesheet" href="11_calendar_2_B.css">
</head>

<?php
          	# Jason's Birthday
		$month_name = 'April';
		$current_year = '2012';
?>


<body>

<div id="calendar_div" name="calendar_div">
    <table id='calendar'>
         <tr>
            <td>
              <table>
                <tr id='calendar_header'>
                  <td id='calendar_section' colspan='7'><?php echo "$month_name $current_year"; ?></td>
                </tr>
                
                <tr>
                  <td id='day'>Sunday</td>
                  <td id='day'>Monday</td>
                  <td id='day'>Tuesday</td>
                  <td id='day'>Wednesday</td>
                  <td id='day'>Thursday</td>
                  <td id='day'>Friday</td>
                  <td id='day'>Saturday</td>
                </tr>

                <?php 
                        
                        # call the mktime() function
                        $timestamp = mktime(0,0,0,4,1,2012);

			# call the date() function
                	$max_day    = date("t",$timestamp);
                	
                	# call the getdate() function
                	$this_month = getdate ($timestamp);
                	$start_day  = $this_month['wday'];

		  # Now a for loop to loop through and print the days out
                  for ( $index = 0 ; $index < ( $max_day + $start_day) ; $index++) 
                  {
                    # Do modulus division to determine if we need to start a new row
                    if(($index % 7) == 0 ) 
                    {
                    	echo "<tr>\n";
                    }
                 
		    # Here pop in a column                    
                    if($index < $start_day) 
                    {
                    	echo "<td></td>\n";
                    }		
                    else 
                    {
                    	# If it is my birthday
                    	if ( ($index - $start_day + 1) == 19 )
                    	{
                    		echo "<td id='birthday' valign='middle'>" . ($index - $start_day + 1) . "\nHappy Birthday!</td>\n";
                    	}
                    	else
                    	{
                    	# Here print the day out
                    	echo "<td id='any_day' valign='middle'>". ($index - $start_day + 1) . "</td>\n";
                    	}
                    }
               
                    # Do modulus here to determin if we should end the row
                    if( ($index % 7) == 6 ) 
                    {
                    	echo "</tr>\n";
                    }
                  }  
                 ?>
              </table>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
