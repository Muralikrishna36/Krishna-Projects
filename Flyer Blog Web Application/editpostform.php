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
<h1>Edit post</h1>
<?php
require "auth.php";
echo "current time: " . date("Y-m-d h:i:sa");
$postid = $_POST['postid'];
$sql = "SELECT *from posts where postid='$postid';";
$posts = $mysqli->query($sql);
	echo "<br>Posts:<br><br>";
	while($row=$posts->fetch_assoc()){
	$postid =$row['postid'];
	echo  htmlentities($row['username']) . "<br>".htmlentities($row['time']). "<br>Title= ". htmlentities($row['title']). "<br>Content= " . htmlentities($row['content'])."<br>";
}
$time = date("Y-m-d h:i:sa");
$rand5 = openssl_random_pseudo_bytes(16);
$_SESSION["nocsrftoken5"] = $rand5;

$username=$_SESSION["username"]
?>
<form action="editpost.php" method="POST" class="form login">
<input type="hidden" name="postid" value= "<?php echo $postid;?>"/>
<input type="hidden" name="secrettoken5" value="<?php echo $rand5;?>"/><br>
Title:<input type="text" name="Post_title" /> <br>
Content: <input type="text" name="Post_content" /> <br> 
<button class ="button" type="Post">
Create a new post
</button>
</form>
</html>
