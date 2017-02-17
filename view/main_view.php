<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    
    <title>Калькулятор</title>

</head>
<body>
<div id="main">
<br><hr>
<div id="display"><p><?= $result ?></p></div>
    <form action="" method="post">
	<table>
	<tr>
	<td><input class="one" type="submit" value="7" name="sym"></td>
	<td><input class="one" type="submit" value="8" name="sym"></td>
	<td><input class="one" type="submit" value="9" name="sym"></td>
	<td><input class="one" type="submit" value="/" name="sym"></td>
	<td><input class="one" type="submit" value="c" name="des"></td>
	</tr>
	<tr>
	<td><input class="one" type="submit" value="4" name="sym"></td>
	<td><input class="one" type="submit" value="5" name="sym"></td>
	<td><input class="one" type="submit" value="6" name="sym"></td>
	<td><input class="one" type="submit" value="*" name="sym"></td>
	<td><input class="one" type="submit" value="&larr;" name="min"></td>
	</td>
	<tr>
	<td><input class="one" type="submit" value="1" name="sym"></td>
	<td><input class="one" type="submit" value="2" name="sym"></td>
	<td><input class="one" type="submit" value="3" name="sym"></td>
	<td><input class="one" type="submit" value="-" name="sym"></td>
	<td rowspan="2"><input id="three" type="submit" value="=" name="res"></td>
	</td>
	<tr>
	<td colspan="2"><input id="two" type="submit" value="0" name="sym"></td>
	<td><input class="one" type="submit" value="." name="sym"></td>
	<td><input class="one" type="submit" value="+" name="sym"></td>
	</td>
	</table>
	</form>
</div>
</body>

</html>