<!DOCTYPE html>
<html>
  <head>
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        margin: 0;
        padding: 0;
        background: #00a08d;
        font-family: Arial, Helvetica, sans-serif;
      }
      .search-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #666666;
        height: 40px;
        border-radius: 40px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
      }
      .search-box:hover > .search-txt {
        width: 240px;
        padding: 0 6px;
      }
      .search-box:hover > .search-btn {
        background: white;
        color: black;
      }
      .search-btn {
        color: #eeeeee;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #2f3640;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.4s;
        color: white;
        cursor: pointer;
        text-decoration: none;
      }
      .search-btn > i {
        font-size: 20px;
      }
      .search-txt {
        border: none;
        background: none;
        outline: none;
        padding: 0;
        color: white;
        font-size: 16px;
        transition: 0.4s;
        line-height: 40px;
        width: 0px;
        font-weight: bold;
      }

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


    }
    </style>
    <ul>
  <li><a href="home.php">Home</a></li>
  <li><a class="active" href="search.php">Search</a></li>
  <li><a href="causes.php">What Causes PCOS?</a></li>
  <li><a href="cure.php">Cure PCOS Naturally</a></li>
  <li><a href="aboutus.php">About Us</a></li>
</ul>
  </head>
  <body>

    <div class="search-box">
      <h4>SEARCH</h4>
      <input type="text" name="name" class="search-txt" placeholder="Type to search" />
      <a class="search-btn" href="#">
        <i class="fa fa-search" aria-hidden="true"></i>
      </a>
    </div>
    
  </body>
</html>