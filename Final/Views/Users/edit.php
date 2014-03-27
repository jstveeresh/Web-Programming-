<<<<<<< HEAD
<style type="text/css">
	.error {
		color: red;
	}
	.my-horizontal label {
		display: inline-block;
		width: 150px;
		text-align: right;
		margin-right: 10px;
	}
	.my-horizontal .form-control{
		display: inline-block;
	}
	@media screen and (min-width: 768px) {
		.my-horizontal .form-control{
			width: 25%;
			margin-bottom: 5px;
		}
	}
</style>


<h2>Edit: <?=$model['FirstName']?> <?=$model['LastName']?></h2>

	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-group <?if(isset($errors['FirstName'])) echo 'has-error has-feedback' ?> ">
		<label for="FirstName">First Name:</label>
		<input class="form-control" type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" placeholder="First Name" />
		<? if(isset($errors['FirstName'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span><?=$errors['FirstName']?></span>
		<? endif ?>
	</div>
	
	
	<div class="form-group <?if(isset($errors['LastName'])) echo 'has-error has-feedback' ?> ">
		<label for="LastName">Last Name:</label>
		<input class="form-control" type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" placeholder="Last Name" />
		<? if(isset($errors['LastName'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span><?=$errors['LastName']?></span>
		<? endif ?>
	</div>
	
	<label for="Password">Password:</label>
	<input class="form-control" type="password" name="Password" id="Password" value="<?=$model['Password']?>" placeholder="Password" />
	<br />
	<label for="fbid">fbid:</label>
	<input class="form-control" type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" placeholder="fbid" />
	

	<div class="form-group <?if(isset($errors['UserType'])) echo 'has-error has-feedback' ?> ">
		<label for="UserType">User Type:</label>
		<input class="form-control" type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>" placeholder="User Type" />
		<? if(isset($errors['UserType'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span><?=$errors['UserType']?></span>
		<? endif ?>
	</div>
	
	<label></label>
	<input class="btn" type="submit" value="Save" />
</form>
=======
<form action="?action=save" method="post">
<label for="FirstName">First Name:</label>
<input type="text" name="FirstName" id="FirstName" />
<br />
<label for="LastName">Last Name:</label>
<input type="text" name="LastName" id="LastName" />
<br />
<label for="Password">Password:</label>
<input type="password" name="Password" id="Password" />
<br />
<label for="fbid">fbid:</label>
<input type="text" name="fbid" id="fbid" />
<br />
<label for="UserType">User Type:</label>
<input type="text" name="UserType" id="UserType" />
<br />
<input type="submit" value="Save" />
</form>

<pre>
<? print_r($_GET); ?>
<? print_r($_POST); ?>
</pre>
>>>>>>> ced1195ede2e1b1d5deb7b43def84198a2b2d184
