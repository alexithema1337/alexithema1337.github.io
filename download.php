<?php

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"file_download.txt\"");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header("Referrer-Policy: no-referrer");
header("X-Content-Type-Options: nosniff");

readfile("poc.txt");
exit;
?>
