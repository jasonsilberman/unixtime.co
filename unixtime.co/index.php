<? /**
 * Made by @datbawz
 * http://bawz.is
 */
?>
<? date_default_timezone_set('America/Los_Angeles'); ?>
<!doctype html>
<html>
<head>
<title>PST Time Stamp</title>
<style type="text/css">
html, body {
	text-align: center;
	height: 100%;
	font-family: Arial;
}
input {
	border: none;
	box-shadow: none;
	font-size: 100px;
	text-align: center;
}
footer {
	text-align: center;
	margin-top: 100px;
	color: #808088;
}
a, a:link, a:visited {
	color: #08c;
}
</style>
<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('#now').select();
		$('body').click(function () {
			$('#now').select();
		});
	});
</script>
</head>
<body>
	<h1>Time Zone in PST</h1>
	<input type="text" id="now" readonly value="<?= time(); ?>" />
	<footer>
		<p>made by <a href="http://bawz.is" target="_blank">bawz</a></p>
	</footer>
</body>
</html>
