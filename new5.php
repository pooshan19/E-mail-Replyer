<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;
        align:center}
body {
    background-color: lightblue;
}
.center {
    margin: auto;
    width: 50%;
    border: 1px solid #000000;
    padding: 10px;
}
.heading {
    text-align: center;
   
}
</style>
</head>

<body>
<div id="body">
<div id="center">
<?php
// define variables and set to empty values
$nameErr = $emailErr =  "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><div class ="heading"><span class="error"><h1>WELCOME TO INTERFLIX</h1></span></p>
<p><span class="error">* required field.</span></p>

<form method="post" action="mail2.php" name ="DETAILS">
<div class="center">
  <p> Name: <input type="text" name="name" value="<?php echo $name;?>">
  
  </p>


 <P> E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  </P>
<p>COUPON CODE:9 Digit
<input name="first_name" type="text"/>
</p>
SUBSRIPTION Validity,1 for 10 day, 2 for month:
<input name="subscribe" type="text"/>
</p>
Would you like to watch in HD:
  <input type="radio" name="option1" <?php if (isset($option1) && $option1=="yes") echo "checked";?> value="yes">yes
  <input type="radio" name="option1" <?php if (isset($option1) && $option1=="no") echo "checked";?>value="male">No
  <br><br>
<p>
<input type="submit" name="submit" id="submit" value="submit"/>
</p>
</form>
</body>
</html>



