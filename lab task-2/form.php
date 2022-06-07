<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
$name = $email =$gender = $degree = $bloodgroup="";
$nameErr =$degreeErr = $emailErr = $genderErr = $bloodgroupErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }}

    }
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
<br><br>
<?php echo $name; ?>
</fieldset>
  <br><br>
<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  EMAIL: <input type="text" name="email" value="<?php echo $email;?>">
</fieldset>
  <br><br>
  <fieldset>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  BLOOD GROUP: 
  <select name="gender" id="gender" >
  <option value=""></option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="A-">A-</option>
  <option value="O-">O-</option>
</select>
<br>
<input type="submit" name="submit" value="Submit">
</fieldset>


</body>
</html>