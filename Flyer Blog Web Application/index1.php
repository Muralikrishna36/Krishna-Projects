<html>
<body>
<h1>Flyers Blog</h1> 
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
<div align = "right">
<br><img src="flyer.png" alt="Flyer blog img" align="left" width="1550" height="500"><br>
<form action="newuserform.php" method="POST" class="form login">
<button class ="button" type="submit">
Sign up!
</button>
</form>
<form action="login.php" method="POST" class="form login">
<button class ="button" type="submit">
Log-in
</button>
</form>
</div>
<p style="clear: both;">
<?php
	$mysqli= new mysqli('localhost', 'SIAD_lab7', 'secretpass', 'SIAD_lab7');
	if($mysqli->connect_error)
		{
			die('Connection to the database has an error: ' . $mysqli->connect_error);
		}
	$sql = "SELECT *from posts;";
	$posts = $mysqli->query($sql);
	if($posts->num_rows>0){
			echo '<br><span style="color: Black; font-size: 20px;">Posts:<br><br>';;
			while($row=$posts->fetch_assoc()){
				$postid =$row['postid'];
				echo '<span style="color: Black; font-size: 20px;">' .htmlentities($row['username']) . "<br>".htmlentities($row['time']). "<br>Title= ". htmlentities($row['title']). "<br>Content= " . htmlentities($row['content'])."<br>";
				echo '<form action="viewcommentsfornonusers.php" method="POST" class="form login"><input type="hidden" name="postid" value="'.$postid.'" >' . '
				<button class ="button" type="Post">
				View comments..
				</button>
				</form>';
					
			}
			return TRUE;
			}else{
        			echo "No posts yet";
    			}
?>
</p>
</body>
</html>
