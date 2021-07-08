<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" href="aboutus.css">
</head>
<body>
  <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #1AAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #11AF90;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #D9E650;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #11AF90;
}
</style>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="causes.php">What Causes PCOS?</a></li>
  <li><a href="cure.php">Cure PCOS Naturally</a></li>
  <li><a class="active" href="#contact">About Us</a></li>
</ul>
<div style="padding:20px;margin-top:30px;background-color:#1abc9c;">
<div class="container">
  <div style="text-align:center">
    <h1>About Us</h1>
    <h3>PCOS Guide is developed to serve as a data repository for our PCOS research. It provides easy access to the information on proteins that are involved in PCOS. Rigorous criteria were applied to the primary dataset in order to select high confidence PCOS-related proteins.</h3>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://i.pinimg.com/originals/4c/52/f9/4c52f9eb7ff10b55e35ab24634db6a57.jpg" style="width:100%">
    </div>
    <div class="column">
<table>
  <tr>
    <td> <h3>Sucharita Paul</h3></td>
  </tr>
  <tr>
    <td> Vellore Institute of Technology</td>
  </tr>
  <tr>
    <td>Conatact Number: 9874843564</td>
  </tr>
    <tr>
    <td>Email: sucharita.paul2018@vitstudent.ac.in</td>
  </tr><br>
  <tr>
    <td><h3> Swati Singh</h3></td>
  </tr>
  <tr>
    <td> Vellore Institute of Technology</td>
  </tr>
  <tr>
    <td>Conatact Number: 9384397219</td>
  </tr>
    <tr>
    <td>Email: swati.singh2018@vitstudent.ac.in</td>
  </tr><br>
  <tr>
    <td><h3> Tanya Vats</h3></td>
  </tr>
  <tr>
    <td> Vellore Institute of Technology</td>
  </tr>
  <tr>
    <td>Conatact Number: 9632587412</td>
  </tr>
  <tr>
    <td>Email: tanya.vats2018@vitstudent.ac.in</td>
  </tr>

</body>
</html>
