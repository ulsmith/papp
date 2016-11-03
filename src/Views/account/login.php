<!DOCTYPE html>
<html>
	<? $this->partial('partials/head.php') ?>
	<body>
	    <h1>PAPP</h1>
		<p>PHP Application Login</p>
		<p>User = 'test'</p>
		<p>Password = 'test'</p>
		<form action="login" method="POST">
			<div style="padding-bottom: 10px;">
				<label for="user" style="display: inline-block; width: 100px;">User</label>
				<input id="user" name="user" type="text"/>
			</div>
			<div style="padding-bottom: 10px;">
				<label for="password" style="display: inline-block; width: 100px;">Password</label>
				<input id="password" name="password" type="password"/>
			</div>
			<div>
				<button style="margin-left: 104px;" type="submit">Submit</button>
			</div>
		</form>
	</body>
</html>
