<html>
<body>
<h1><font size = "10">Flyers Blog</h1> 
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
    float: left;
}
#Button1 , #Button2 ,#Button3{
display:inline-block;

}
</style>
<img src="flyer.png" alt="Flyer blog img" align="left" width="1800" height="600"><br>
<p style="clear: both;"><br>
	<a href='newuserform.php'><font size = "5"> Add a new user</a>
	<?
	echo str_repeat("&nbsp;", 2);
	?>
	<a href='changepasswordform.php'><font size = "5">change your password</a>
	<?
	echo str_repeat("&nbsp;", 2);
	?>
	<a href='logout.php'><font size = "5">click here to logout</a>
	<?
	echo str_repeat("&nbsp;", 2);
	?>
	<a href='newpostform.php'><font size = "5">click here to add new post</a><br><br>

<?php
	$mysqli= new mysqli('localhost', 'SIAD_lab7', 'secretpass', 'SIAD_lab7');
	if($mysqli->connect_error)
		{
			die('Connection to the database has an error: ' . $mysqli->connect_error);
		}
	$sql = "SELECT *from posts;";
	$posts = $mysqli->query($sql);
	if($posts->num_rows>0){
			echo '<span style="color: Black; font-size: 20px;">Posts:<br><br>';
			while($row=$posts->fetch_assoc()){
				$postid =$row['postid'];
				//echo "postid = " .$postid."<br>";
				echo "<br>"."<br>"."<br>".'<span style="color: Black; font-size: 20px;">' . htmlentities($row['username']) . "<br>".htmlentities($row['time']). "<br>Title= ". htmlentities($row['title']). "<br>Content= " . htmlentities($row['content'])."<br>";
				echo '<form action="viewcomments.php" method="POST" class="form login"><input type="hidden" name="postid" value="'.$postid.'" >' . '
				<button class ="button" id="Button1" type="submit">
				View comments..
				</button>
				</form>';
				echo '<form action="editpostform.php" method="POST" class="form login"><input type="hidden" name="postid" value="'.$postid.'" >' . '
				<button class ="button" id="Button2" type="Post">
				Edit post..
				</button>
				</form>';
				echo '<form action="deletepost.php" method="POST" class="form login"><input type="hidden" name="postid" value="'.$postid.'" >' . '
				<button class ="button" id="Button3" type="Post">
				Delete post..
				</button>
				</form>';
				
				
			}
			return TRUE;
			}else{
        			echo "No posts yet";
    			}
?>
</p>
</html>
</body>


