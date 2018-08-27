<html>
<style>
body {
         /*background-image: url("bcg.jpg");*/
} 
.button {
    border-radius: 12px;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 250px;
}

form {
  text-align: center;
}
h1{
  padding-top:250px;
  text-align: center;
} 
</style>
<h1>Create new user</h1>
<?php

echo '<center>' ."<br>current time: " . date("Y-m-d h:i:sa") . '</center>'  ;
echo "<br>";
$rand = openssl_random_pseudo_bytes(16);
$_SESSION["nocsrftoken"] = $rand;
?>
<form action="adduser.php" method="POST" class="form login">
<input type="hidden" name="secrettoken" value="<?php echo $rand;?>"/><br>
Username:<input type="text" name="newusername" required pattern="\w+"/> <br>
Password: <input type="password" name="newpassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/> <br>
Confirm Password: <input type="password" name="newpassword2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/> <br><!..todo: check the password patterns and characters are same or not.!>
<button class ="button" type="submit">
Create a new user
</button>
</form>
</html>
