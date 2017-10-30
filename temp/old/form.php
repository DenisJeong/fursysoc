<?php $username = 'jjd'; ?>

<style>
	.hidden {
		background: red;
		color: gold;
		font-weight: bold;
	}
</style>

<form method="post" action="action.php?command=login">
	
	username: <input type="text" name="username" value="<?= $username ?>" title="user name">
	<br>
	password: <input type="password" name="pass" title="password">
	<br>
	<input type="submit">


	<input type="text" name="name" class="hidden" id="honeypot">
</form>

<hr>

<a href="action.php?command=logout">Logout</a>

<button type="button" id="fire">change value</button>

<script>
	document.getElementById('honeypot').value = "jjd";
    document.getElementById('fire').addEventListener('click', function () {
    	var honeypot = document.getElementById('honeypot');
    	if (honeypot.value == "jjd") {
    		honeypot.value = "jjd chagned.";	
    	} else {
    		honeypot.value = "jjd";
    	}
    });
</script>
