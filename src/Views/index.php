<!DOCTYPE html>
<html>
	<? $this->partial('partials/head.php') ?>
	<body>
	    <h1>PAPP</h1>
		<p>PHP Application</p>
		<p>Passed in to view: <?= $name ?></p>
		<p>Injected service method: <?= $example ?></p>
		<? foreach ($test as $key => $paragraph): ?>
			<? $this->partial('partials/paragraph.php', ['data' => $paragraph, 'data2' => ':BOOO']) ?>
		<? endforeach ?>
		<p>To log in go to <a href="account/login">account/login</a></p>
		<p>To log out go to <a href="account/logout">account/logout</a></p>
		<? if ($user): ?>
			<p><strong>user: </strong><?= $user['user'] ?></p>
			<p><strong>name: </strong><?= $user['name'] ?></p>
			<p><strong>access: </strong><?= $user['access'] ?></p>
		<? endif ?>
	</body>
</html>
