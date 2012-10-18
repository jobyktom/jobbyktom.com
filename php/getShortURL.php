<?php
$url = $_GET['url'];
echo file_get_contents("http://tinyurl.com/api-create.php?url=" . urlencode($url));
?>
