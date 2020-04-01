 <?php


if(isset($_POST['register'])) { 
 

 
 $password = $_POST['password'];  
 
    $email = $_POST['email'];
   
       if(empty($password)|| empty($email)||!filter_var($email, FILTER_VALIDATE_EMAIL)) {

   

echo"<script type='text/javascript'>
  alert('please intert all value completely and correctly');

 </script>";

    
    }



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>.error {color: #FF0000;}
.body{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.menubar {
  overflow: hidden;
  background-color: #3300FF;
}

.menubar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  text-transform: bold;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.menubar a:hover {
  background-color: #3300FF;
  color: black;
}

.menubar a.active {
  background-color: #FFFFFF;
  color: blue;
}

.button {
  background-color: #3300FF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#wrapper {
  width: 30%;
  margin: 50px auto;
  padding: 50px;
  background: #D7FBFF;
}
form {
  margin: 30px auto;
}
.textInput {
  border: none;
  height: 28px;
  margin: 2px;
  border: 1px solid #6B7363;
  font-size: 1.2em;
  padding: 5px;
  width: 95%;
}
.textInput:focus {
  outline: none;
}
.btn {
  width: 98.6%;
  border: none;
  margin-top: 5px;
  color: white;
  background-color: #3b5998;
  border-radius: 5px;
  padding: 12px;
}
.leftmenu{
  width: 20%;
  line-height: 100px;
  float: left;
/*  background-color: yellow;*/
}
.leftmenu h4{
  padding-left: 70px;
  font-weight: bold;
  color: blue;
  font-size: 22px;
  font-family:  'Montserrat', sans-serif;
}
 .rightmenu{
  width:70%;
  height: 100px;
  float: right;
/*  background-color: red; */
}
.rightmenu ul{
  margin-left: 600px;
}

.rightmenu ul li {
  font-family:  'Montserrat', sans-serif;
  
  display: inline-block;
  list-style: none;
  font-size: 15px;
  color:white;
  font-weight: bold;
  line-height: 100px;
  margin-left: 10px;
  text-transform: uppercase;

}

</style>
</head>
<body>
  <div class="bgimage">
  <div class="menubar">
     <div class="leftmenu">
        Aiub Bank 
      </div>
       <div class="rightmenu">
        <ul>
  <a href="signup.php">signup</a>
  </div>
</ul>
</div>
<div id="wrapper">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
       <form name="form1" method="post" action="signup.php">

    <div id="email_div">
      <label>Email</label> <br>
      <input type="email" name="email" class="textInput">
      
    </div>
    <div id="password_div">
      <label>Password</label> <br>
      <input type="password" name="password" class="textInput">
    </div>
    
    <div>
    <input type="submit" name="register" value="Register" class="btn">
    </div>
   </form>
  </div>
</div>
</body>
</html>
