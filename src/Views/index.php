<!DOCTYPE html>
<html>
	<head>
	    <title>PAPP</title>
	</head>
	<body>
	    <h1>PAPP</h1>
		<p>PHP Application</p>
		<p>Passed in to view: <?= $name ?></p>
		<p>Injected service method: <?= $example ?></p>
		<? foreach ($test as $key => $paragraph): ?>
			<? $this->partial('partials/paragraph.php', ['data' => $paragraph, 'data2' => ':BOOO']) ?>
		<? endforeach ?>
	</body>
</html>
