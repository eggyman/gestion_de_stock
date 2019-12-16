
<?php 
$con = mysqli_connect('localhost','root','','ihm');

            $query="select * from personel where mail='".$_POST['mail']."' and pwd='".$_POST['pwd']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
               
                header("location:acc.php");
            }
          else
            header("location:login.php?inv=verifier votre login et mot de passe svp !");
?>