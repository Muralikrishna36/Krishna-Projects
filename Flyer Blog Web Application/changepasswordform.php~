<html>
<style>
body {
        background-image: url("bcg.jpg");
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
<h1>Change the password</h1>
<?php
require "auth.php";
echo '<center>' ."<br>current time: " . date("Y-m-d h:i:sa") . '</center>'  ;
echo "<br>";
?>
<form action="changepassword.php" method="POST" class="form login">
Change password for <?php echo $_SESSION["username"]; ?> <br>
New Password: <input type="password" name="newpassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/> <br>
Confirm New Password: <input type="password" name="newpassword2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/> <br><!..todo: check the password patterns and characters are same or not.!>
<button class ="button" type="submit">
Change password
</button>
</form>
</html>
