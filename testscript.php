	<?php
	echo "Filename  :".$_FILES["file"]["name"]."<br>";
	echo "Type      :".$_FILES["file"]["type"]."<br>";
	echo "Size      :".$_FILES["file"]["size"]."<br>";
	echo "Temp Name :".$_FILES["file"]["tmp_name"]."<br>";
	echo "Error     :".$_FILES["file"]["error"]."<br>";

	?>