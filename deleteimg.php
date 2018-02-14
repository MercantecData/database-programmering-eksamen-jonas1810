<?php
$conn = mysqli_connect("localhost", "root", "", "databaseexam");

mysqli_select_db ($conn,"databaseexam");
$sql = "DELETE FROM images WHERE ID='$_GET[id]";

if (mysqli_query($conn,$sql))
    header("refresh:1; url=index.php");
else 
    echo "failed to delete image";

?>