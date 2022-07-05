<?php 

require_once ('connect.php');
  if (isset($_POST) & !empty($_POST)) {
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $email = ($_POST['email']);
    $stage = $_POST['stage'];
    $periode = $_POST['periode'];

    $CreateSql = "INSERT INTO `etudiant` (first_name,   last_name, email, stage, periode)  VALUES('$nom', '$prenom', '$email', '$stage', '$periode') ";
    $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
    if ($res) {
      $message = "insertion reussi avec succès";
    }else{
      $erreur = "erreur d'insertion a la base";
    }
  }

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >
</head>
<body>
  <?php   
    include 'navbar.php';
   ?>

  <div class="container">
    <div class="row pt-4">
      <?php if (isset($message)) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $message; ?>
        </div> <?php } ?>

        <?php if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $erreur; ?>
        </div> <?php } ?>

      <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
        <h2>Contactez Malik !</h2>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Nom</label>
          <div class="col-sm-10">
            <input type="text" name="nom" placeholder="Nom" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">prenom</label>
          <div class="col-sm-10">
            <input type="text" name="prenom" placeholder="prenom" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" placeholder="e-mail" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Stage</label>
          <div class="col-sm-10">
            <label>
              <input type="radio" name="stage" id="optionsRadios" value="Pfe" checked>
              Pfe
            </label>
            <label>
              <input type="radio" name="stage" id="optionsRadios" value="Ete" checked>
              Ete
            </label>
            
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Période</label>
          <div class="col-sm-10">
            <select name="periode" class="form-control">
              <option>La Période</option>
              <option value="Mai">Mai</option>
              <option value="Juin">Juin</option>
              <option value="Juillet">Juillet</option>
              <option value="Aout">Aout</option>
              <option value="Septembre">Septembre</option>

            </select>
          </div>
        </div>

        <div class="pt-4">
          <input type="submit" value="envoyer" class="btn btn-primary m-3">
          <a href="index.html">
            <button class="btn btn-success m-3" type="button">
              Retour 
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>