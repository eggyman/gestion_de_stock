<html>
<head>
  <title>ajout produit</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css" >

</head>
<body>
  <br><br><br>
<div class="container">
		<div class="card text-center">
  
  <div class="card-body">
    <h1 class="card-title">Ajouter un produit</h1><br><br>
   <a href="acc.php"><button  type="button"  class="btn btn-primary btn-lg" style="float: right;">Stock</button></a>
    <br><br><br>
    <form method="POST" action="insertproduit.php" name="ala">
  <fieldset>

    <div class="form-group">
      <label for="exampleInputEmail1">Reference</label>
      <input type="text" class="form-control" name="ref"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Reference du produit" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" class="form-control" name="nom"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom du produit" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prix</label>
      <input type="text" class="form-control" name="prix"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prix unitaire" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Quantite</label>
      <input type="text" class="form-control" name="qte"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantite" required>
    </div></fieldset>
      <button type="submit" class="btn btn-primary" onclick="verif()" >&nbsp;&nbsp;Ajouter&nbsp;&nbsp;</button>
      <button type="reset" class="btn btn-primary" >&nbsp;&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;&nbsp;</button><br><br>
      </div></div></div>
  </form>
  <script>
      function verif()
      {

          if(isNaN(document.ala.prix.value)||isNaN(document.ala.prix.value))
            alert("le champ prix et quantite doivent etre numerique");

      }


  </script>

</body>
</html>