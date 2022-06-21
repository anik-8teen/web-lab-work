<?php
  $uname = $pass = $nameerr = $passerr = "";
  $flg = true;
  if(isset($_POST["submit"]))  
  {  
    if(empty($_POST["uname"]))  
    {  
        $nameerr = "Name Required"; 
        $flg = false;
    }
    elseif(strlen($_POST["uname"])<2){
      $nameerr = "Name needs to have at-least 2 characters";
      $flg = false;
    }
    else {
      $uname = $_POST["uname"];
      if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
        $nameerr = "name not valid";
        $flg = false;
      }
    }
    if(empty($_POST["pass"])){
      $passerr  = "Password Required";
      $flg = false;
    }
    elseif(strlen($_POST["pass"])<8){
      $passerr = "Password must have at-least 8 characters";
      $flg = false;
    }
    elseif(!preg_match("/^(?=.*[^a-zA-Z0-9])*$/",$pass)){
      $passerr = "Password must contain at least one special character";
      $flg = false;
    }
    if(!empty($_POST["uname"]) && !empty($_POST["pass"])&& $flg){
      session_start();

      $_SESSION['name'] = $_POST["uname"];
      $_SESSION['pass'] = $_POST["pass"];

      header("location:NextPage.php");
    } 
  }
?>
<htm>
  <head>
  </head>
  <body>
  <form   method="post">
  <br>
  <table>
    <tr>
      <td>
      Username:
      </td>
      <td>
      <input type="text" name="uname"><span style="color: red;"><?php  echo $nameerr ?></span>
      </td>
    </tr>
    <tr>
      <td>
      Password:
      </td>
      <td>
      <input type="password" name="pass"><span style="color: red;"><?php  echo $passerr ?></span>
      </td>
    </tr>
    <tr>
      <td>
      <input type="submit" name="submit" value="submit">
      </td>
      <td>
        <a href = "fgot.php">Forgot Password?</a>
      </td>
    </tr>
  </table>
</form>
  </body>
</htm>