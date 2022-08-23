<?php
require '../../config/config.php';
include("../classes/User.php");
include("../classes/Post.php");
include("../classes/Notification.php");

if(isset($_POST['post_body'])) {
	$uploadOk = 1;
	$imageName = $_FILES['fileToUpload']['name'];
	$errorMessage = "";

	if($imageName != "") {
		$targetDir = "assets/images/posts/";
		$imageName = $targetDir . uniqid() . basename($imageName);
		$imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);

		if($_FILES['fileToUpload']['size'] > 10000000) {
			$errorMessage = "Sorry your file is too large";
			$uploadOk = 0;
		}

		if(strtolower($imageFileType) != "jpeg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpg") {
			$errorMessage = "Sorry, only jpeg, jpg and png files are allowed";
			$uploadOk = 0;
		}

		if($uploadOk) {

			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../../" . $imageName)) {
			//image uploaded okay
			}
			else {
			//image did not upload
			$uploadOk = 0;
			}
		}

	}
	else {
		echo "NO UPLOAD";
	}

	if($uploadOk) {
		$post = new Post($con, $_POST['user_from']);
		$post->submitPost($_POST['post_body'], $_POST['user_to'], $imageName);
	}
	else {
		echo "<div style='text-align:center;' class='alert alert-danger'>
				$errorMessage
			</div>";
	}

}
else {
	echo "NO UPLOAD";
}

 ?>