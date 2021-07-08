<!DOCTYPE html>
<html>
<head>
	<title>ADD DATA</title>
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
  height: 500px;
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
 		<h1 align="center">Add Data</h1>
<form name="form1" action="add1.php" method="post" class="box" align="center">
<table align="center" cellpadding = "10">
 
<tr>
<td>Gene Symbol:</td>
<td><input type="text" name="gene_symbol"/>
</td>
</tr>
 
<tr>
<td>Location:</td>
<td><input type="text" name="location"/>
</td>
</tr>

<tr>
<td>Phenotype:</td>
<td><input type="text" name="phenotype"/>
</td>
</tr>

<tr>
<td>Phenotype MIM No.:</td>
<td><input type="text" name="mim_no"/>
</td>
</tr>

<tr>
<td>PUBMED ID:</td>
<td><input type="text" name="pubmed_id"/>
</td>
</tr>

<tr>
<td>Inheritance:</td>
<td><input type="text" name="inheritance"/>
</td>
</tr>

<tr>
<td>Clinical Synopsis:</td>
<td><textarea name="clinical_synopsis" rows="5" cols="30" placeholder="Clinical Synopsis"></textarea></td>
</td>
</tr>

<tr>
	<td>
<button class="button" name="submit">SUBMIT</button>
</td>
</tr>
</form>
</body>
</html>