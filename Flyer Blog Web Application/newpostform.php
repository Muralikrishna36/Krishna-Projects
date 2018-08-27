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
</style>
<h1>Add a new post</h1>
<?php
require "auth.php";
echo "current time: " . date("Y-m-d h:i:sa");
$time = date("Y-m-d h:i:sa");
$rand1 = openssl_random_pseudo_bytes(16);
$postid = openssl_random_pseudo_bytes(16);
$_SESSION["nocsrftoken"] = $rand1;
//echo $rand1;
$username=$_SESSION["username"];
?>
<form action="addpost.php" method="POST" class="form login">
<input type="hidden" name="secrettoken1" value="<?php echo $rand1;?>"/><br>
<input type="hidden" name="Postid" value="<?php echo $postid;?>"/><br>
Title:<input type="text" name="Post_title" /> <br>
Content: <input type="text" name="Post_content" /> <br>
Time:<input type="text" name="Time" value="<?php echo $time;?>"/><br> 
Username:<input type="text" name="Username" value="<?php echo $username ?>"/><br>
<button class ="button" type="Post">
Create a new post
</button>
</form>
</html>
