<?php
include("includes/header.php");

if(isset($_GET['username'])) {
	$username = $_GET['username'];
}
else {
	$username = $userLoggedIn;
}
?>

<div class="main_column column" id="main_column">

	<?php
		$user_obj = new User($con, $username);
		foreach($user_obj->getFriendsList() as $friend) {
			$friend_obj = new User($con, $friend);
			echo "<a href='$friend'>
					<img class='profilePicSmall' src='" . $friend_obj->getProfilePic() ."'>"
					 . $friend_obj->getFirstAndLastName() . 
				"</a>
				<br>";
		}
	?>

</div>