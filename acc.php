<!DOCTYPE html>
<html>
<head>
	<title>Acceuil</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css" >

</head>
<body>
  <?php require_once 'procc.php'; ?>
	<br><br><br>
	<div class="container">
		<div class="card text-center">
  
  <div class="card-body">
    <h1 class="card-title">Stock</h1><br><br>
   <a href="ajout.php"><button  type="button"  class="btn btn-primary btn-lg" style="float: right;">Ajouter produit</button></a>
    <br><br><br>
    <form method="POST" action="procc.php">
  <fieldset>

    <div class="form-group">
      <label for="exampleInputEmail1">Reference</label>
      <input type="text" readonly class="form-control" name="ref" value="<?php echo $a; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Reference du produit">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" class="form-control" name="nom" value="<?php echo $b; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom du produit">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prix</label>
      <input type="text" class="form-control" name="prix" value="<?php echo $c; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prix unitaire">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Quantite</label>
      <input type="text" class="form-control" name="qte" value="<?php echo $d; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantite">
    </div></fieldset>
      <button type="submit" class="btn btn-primary" name="save">Modifier</button><br><br>
  </form>








    	<div class="container">
  <fieldset>
    <?php
       $con = mysqli_connect('localhost','root','','ihm');
         
        $sql =mysqli_query($con,'SELECT * from produit');
        
        ?>
   <table class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">Reference</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Qte</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <?php
            while($donnees = mysqli_fetch_assoc($sql))
            {
            ?>
             <tr >
                    <td scope="col"><?php echo $donnees['ref'];?></td>
                    <td scope="col"><?php echo $donnees['nom'];?></td>
                    <td scope="col"><?php echo $donnees['prix'];?></td>
                    <td scope="col"><?php echo $donnees['quantite'];?></td>
                    <td scope="col"><a href="acc.php?edit=<?php echo $donnees['ref']; ?>" class="btn btn-warning">Update</a></td>
                    <td scope="col"><a href="procc.php?del=<?php echo $donnees['ref']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
            } 
           
            ?>
  </thead></table>  

  </fieldset></div>

  </div>
</div>

	</div>
</body>
</html>