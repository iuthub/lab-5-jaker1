
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<?php 

		$name = $_POST[name];
		$section = $_POST[section];
		$credit = $_POST[credit];
		$ctype = $_POST[ctype];


		file_put_contents("suckers.txt", file_get_contents("suckers.txt")."$name;$section;$credit;$ctype\n");
		



		 ?>

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?=$name ?></dd>

			<dt>Section</dt>
			<dd><?=$section ?></dd>

			<dt>Credit Card</dt>
			<dd><?=$credit ?></dd>
		</dl>



		<pre>
			<?php 	

				echo file_get_contents("suckers.txt");

			 ?>
		</pre>
	</body>
</html>