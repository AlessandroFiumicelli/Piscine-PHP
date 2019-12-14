<?PHP
session_start();
if ($_GET && $_GET['submit'] == "OK"){
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
}
$login = '';
$passwd = '';
if ($_SESSION['login'])
		$login = $_SESSION['login'];
if ($_SESSION['passwd'])
		$passwd = $_SESSION['passwd'];
?>
<!DOCTYPE html>
<html>
<body>
    <form action="." method="get">
        Username: <input type="text" name="login" placeholder="Username" value="<?= $login ?>">
        <br>
        Password: <input type="password" name="passwd" placeholder="Password" value="<?= $passwd ?>">
        <br>
        <button type="submit" name="submit" value="OK">Save</button>
	</form>
</body>
</html>
