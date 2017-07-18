<!doctype html>

<html>
	<head>
		<title>Рандомные люди</title>
		<meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<div class="header" align="center">
	    <h1 class="pos"><b>КАКИЕ-ТО РАНДОМНЫЕ ЛЮДИ</b></h1>
	  </div>

		<div class="main">
        <?php
          $count = 20;
          while($count > 0): ?>
          <h3 style="<?php echo 'color:',
					sprintf( '#%02X%02X%02X', rand(0, 255),
					rand(0, 255), rand(0, 255) ) ;  ?>">

					<div class="bl fl1"><img src="images/<?php echo $count;?>.jpg">
				  <figure> <figcaption><div align="center"><h3>
					<b>какой-то человек</b></h3></div></figcaption></figure></div>
          <?php $count -= 1; ?>

				<?php endwhile; ?>

		</div>

	</body>
</html>
