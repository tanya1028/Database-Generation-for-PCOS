<!DOCTYPE html>
<html>
<head>
	<title>Customer Form Page</title>
</head>
<style>
    body
    {
      font-size: 20px;
      font-family: sans-serif;
      font-weight: 600;
    }
    .center{
  background-color: LightBlue;
  width: 40%;
  height: 430px;
  border: 5px solid green;
  padding: 30px;
  margin-top: 100px;
  margin-left: 450px;
}
.button{
	background-color: Green;
	color: White;
}
</style>

 <body bgcolor="119988">
 	<div class="center">
 		<h1 align="center">Sign Up</h1>
<form name="form1" action="input.php" method="post" class="box" align="center">
<table align="center" cellpadding = "10">
 
<tr>
<td>Full Name: </td>
<td><input type="name" name="name"/>
</td>
</tr>
 
<tr>
<td>Email: </td>
<td><input type="email" name="email"/>
</td>
</tr>

<tr>
<td>Mobile: </td>
<td><input type="text" name="mobile"/>
</td>
</tr>

<tr>
<td>Symptoms: </td>
<td><input type="text" name="symptoms" placeholder="Enter symptoms with ','"/>
</td>
</tr>
<tr>
  <td>Comments: </td>
<td><textarea id="txtMessage" rows="5" cols="30" placeholder="Comments"></textarea></td>
</tr> 

<tr>
	<td>
<button class="button" name="submit">SUBMIT</button>
</td>
</tr>
</form>
</body>
</html>