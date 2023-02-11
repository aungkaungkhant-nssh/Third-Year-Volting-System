<!-- Dev ASM -->
<?php
//print_r($_FILES);
$name = $_FILES['photo']['name'];
$temp = $_FILES['photo']['tmp_name'];
move_uploaded_file($temp, "photos/$name");