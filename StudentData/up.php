<?php

$fname=$_FILES['f']['name'];

$fsize=$_FILES['f']['size'];

$type=$_FILES['f']['type'];

$temppath=$_FILES['f']['tmp_name'];

move_uploaded_file($temppath,"files/".$fname);
echo "File Uploaded Success...............";
?>