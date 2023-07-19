<!DOCTYPE HTML>  
<html>
<head>

<style>

.student{
margin-left:20rem;

}
body{
background-color:#D2AC47;

}


</style>

</head>
<body>  

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ID = test_input($_POST["iD"]);
  $Name = test_input($_POST["name"]);
  $Fees = test_input($_POST["fees"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 class=student>Student Admission Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
  ID: <input type="text" name="iD">
  <br><br>
  Name: <input type="text" name="name">
  <br><br>
  Fees: <input type="text" name="fees">
  <br><br>
 
  <br>
  
  <h4>Duration Time</h4>
  
  <p>12/12/2012</p>
  
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "";
echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $fees;
echo "<br>";echo "<br>";

?>

</body>
</html>