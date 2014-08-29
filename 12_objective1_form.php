<head>
</head>

<body>
<h3>The Invitation Program - Lesson 12 Objective 1</h3>

<form method="GET" action="/php - intro course/12_objective1.php">
<table>


<tr>
<td align="right">
First Name #1:
</td>
<td align="left">
<input type="text" size="25" name="name" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #1:
</td><td align="left">
<input type="text" size="25" name="email" value="<? echo $_GET['email']; ?>" />
</td>
</tr> 
  
<tr>
<td colspan="2" align="center">
<input type="submit" value="SUBMIT" />
</td></tr>
</table>
</form>

</body>

