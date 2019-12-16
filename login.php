<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css" >
</head>
<body>
	<br><br><br><br><br><br><br><br>
	<div class="container">
		<div class="card text-center">
  
  <div class="card-body">
    <h1 class="card-title">Login</h1><br>
    <div class="container">
    <form action="traitement.php" method="POST">
  <fieldset>
    
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password" required>
    </div>

    </fieldset>
    <button type="submit" class="btn btn-primary">connexion</button>
     <button type="reset" class="btn btn-primary">Annuler</button>
    <a href="inscription.php"><small align="left" id="emailHelp" class="form-text text-muted">cree un compte</small></a>
  </fieldset>
</form>
</div>

    
  </div>
  
</div>
	</div>
	<?php 
 if (isset($_GET['inv'])) ?>
 <script> alert("<?php echo  ($_GET['inv'] ) ?>") ;

</script>
</body>
</html>