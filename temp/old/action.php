<?php
include 'boot.php';

if (!empty($_POST['honeypot'])) {
	die('invalid');
}
?>
<pre>
<?php
var_dump($_GET, $_POST, $_REQUEST);

if ($_GET['command'] == 'login') {
	echo 'login complete!';
}

if ($_GET['command'] == 'logout') {
	echo 'byebye~';
}