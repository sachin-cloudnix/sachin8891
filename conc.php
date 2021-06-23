<?php
$conn;
$status;

function connect(){

$server="localhost";
$username="root";
$password="root";
$dbname="NDataB";

$GLOBALS['conn']=new mysqli($server,$username,$password,$dbname);

if($GLOBALS['conn']->connect_error){
	die("Connection failed ".$conn->connect_error);
}

 $GLOBALS['status']="DATABASE CONNECTED";
}

connect();


function get_name(){

$sql="SELECT Name FROM tUser where User_id=1";
$result=$GLOBALS['conn']->query($sql);

if($result->num_rows > 0 ){
	while($ro1=$result->fetch_assoc()){
		echo $ro1["Name"];
	}
}
else{
	echo "No result found";
 }
}

function get_friends_name(){
	$sql="SELECT Name FROM tUser INNER JOIN (SELECT Friend_id FROM tFriends WHERE User_id=1) AS restable ON tUser.User_id=restable.Friend_id";
	$result=$GLOBALS['conn']->query($sql);

if($result->num_rows > 0 ){
	while($ro1=$result->fetch_assoc()){
		echo "<a href="">".$ro1["Name"]."</a><br>";
	}
}
}



function get_post(){
	$sql="SELECT Post FROM tWall WHERE User_id=1";

	$result=$GLOBALS['conn']->query($sql);

   if($result->num_rows > 0 ){
	while($ro1=$result->fetch_assoc()){
		echo "--".$ro1["Post"]."<br>";
	}
}
}


?>