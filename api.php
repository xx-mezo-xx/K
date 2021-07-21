<?php
$mail = strtolower($mail);
$api = json_decode(file_get_contents('https://canary.ibuser.xyz/cj.php?mail='.$mail));