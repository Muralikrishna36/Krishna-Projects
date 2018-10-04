<!--<style>
body {
        background-image: url("bcg.jpg");
} 
 
</style>-->
<?php
	$commentid = $_POST['commentid'];
	$mysqli= new mysqli('localhost', 'SIAD_lab7', 'secretpass', 'SIAD_lab7');
	if($mysqli->connect_error)
		{
			die('Connection to the database has an error: ' . $mysqli->connect_error);
		}
	$sql = "DELETE FROM comments WHERE commentid='$commentid';";
	//echo "sql=$sql";
	global $mysqli;
		$result = $mysqli->query($sql);
		if($result==TRUE){
		echo " Comments have been deleted<br>";
		}else{
		echo "Error deleting comment :". $mysqli->error;    
    		}
	
?>
<a href='viewcomments.php'> Click here to go back to comments</a>
