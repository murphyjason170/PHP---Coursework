<head>
</head>

<body>
<h3>The Invitation Program - Lesson 12 Objective 1</h3>

<form method="GET" action="/php - intro course/12_objective1_A.php">
<table>

<tr>
<td align="right">
Name #1:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #1:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>



<tr>
<td align="right">
Name #2:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #2:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Name #3:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #3:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Name #4:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #4:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Name #5:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #5:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Name #6:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #6:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Name #7:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #7:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>
   
<tr>
<td align="right">
Name #8:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #8:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>   
   
<tr>
<td align="right">
Name #9:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #9:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Name #10:
</td>
<td align="left">
<input type="text" size="25" name="name[]" value="<? echo $_GET['name']; ?>" />
</td>
</tr>

<tr>
<td align="right">
Email #10:
</td>
<td align="left">
<input type="text" size="25" name="email[]" value="<? echo $_GET['email']; ?>" />
</td>
</tr>
   
<tr>
<td colspan="2" align="center">
<input type="submit" value="SUBMIT" />
</td></tr>
</table>
</form>

<form enctype="multipart/form-data" action="upload.php" method="POST">
 Please choose a file: <input name="uploaded" type="file" /><br />
 <input type="submit" value="Upload" />
 </form> 
 
 
</body>

