<!DOCTYPE HTML>
<html>
<?php 
session_start();
include "includes/db.php";
?>
<head>
  <title>textured_orbs - a page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
<?php
              include "includes/nav-bar.php"
?>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>June 1st, 2014</h5>
            <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
 <?php 
              include "includes/nav-min.php"

?>       
        <h1>FIR Registration</h1>
        <?php 
if(!isset($_SESSION['user'])) // If session is not set then redirect to Login Page
       {
           header("Location:Thanks.php");  
       }

       $user = $_SESSION['user'];
echo 'Welsome!'.$user;
 ?>
          
<form method="post" action="fir_r1.php">
<fieldset>
<legend>FIR Form</legend>
<table width="100%" border="0" cellpadding="5" cellspacing="5">
<tr>
<td style="font-weight: bold"><div align="right"><label for="c_type">Complain Type</label></div></td>
<td>  
<select name="c_type">      

  <?php

  $sql ="select crime_type from mstr_crimetype";
  $run = mysqli_query($conn,$sql);
  while ($rows = mysqli_fetch_assoc($run)) {
    echo "
      <option>$rows[crime_type]</option>
    ";
  }

  ?>
  </select>

</td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="c_title">Title</label></div></td>
<td><input name="c_title" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="c_desc">Description</label></div></td>
<td><TEXTAREA name="c_desc"></TEXTAREA></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="mobile">Mobile</label></div></td>
<td><input name="mobile" type="text" maxlength="10"  pattern="[0-9]{10}" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Register!" />
</div></td>
</tr>
</table>
</fieldset>
</form>

      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; textured_orbs | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
</body>
</html>

  <?php

  $sql ="select * from tbl_customer where cname='$user'";
  $run = mysqli_query($conn,$sql);
  while ($rows = mysqli_fetch_assoc($run)) {
    echo "$rows[cid]";
    echo "$rows[email]";

  }

  ?>
