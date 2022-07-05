<?php 
  require_once ('connect.php');
  $ReadSql = "SELECT * FROM `etudiant` ";

  $res = mysqli_query($con, $ReadSql);

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Liste des Contacts</title>
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
      <h2>Liste des Contacts</h2>

      
    </div>

    <table class="table table-striped mt-3">
      <thead>
        <tr>
          <th>id</th>
          <th>Nom complet</th>
          <th>Email</th>
          <th>Période</th>
          <th>Stage</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php while ($r = mysqli_fetch_assoc($res)) {
        ?>

        <tr>
          <th scope="row"><?php echo $r['id']; ?></th>
          <td><?php echo $r['first_name'] ." ". $r['last_name']; ?></td>
          <td><?php echo $r['email']; ?></td>
          <td><?php echo $r['periode']; ?></td>
          <td><?php echo $r['stage']; ?></td>

          <td>
            <a href="update.php?id=<?php echo $r['id']; ?>" class="m-2">
              <i class="fa fa-edit fa-2x"></i>
            </a>
            <i class="fa fa-trash fa-2x red-icon"
             data-bs-toggle="modal"
             data-bs-target="#exampleModal<?php echo $r['id']; ?>">
              
             </i>

             <div class="modal fade" id="exampleModal<?php echo $r['id']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <p>etes vous sur de vouloir supprimer cette etudiant ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"
                    data-bs-dismiss="modal">Annuler</button>
                    <a href="delete.php?id=<?php echo $r['id']; ?>">
                      <button class="btn btn-danger" type="button">Confirmer</button>
                    </a>
                  </div>
                </div>
              </div>
             </div>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>


  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>