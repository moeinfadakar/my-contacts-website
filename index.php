<?php
include "database.php";

$shomareha = mysqli_query($connection," SELECT * FROM `contacts`");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<!-- meta tag`s -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- link -->
<link rel="stylesheet" href="bootstrap.rtl.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

<!-- title -->

<title>contact_list</title>
</head>
<body>

<!-- the top navbar -->
<div class="container-fluid">

   <nav class="navbar navbar-expand-lg bg-body-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">my contact list</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DELETE side -->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <form action="delete.php" method="post">
        <li class="nav-item">
          <button name="remove"  class="btn btn-danger mt-2 "  href="#">DELETE</button>
        </li>
        </form>       
        </li>

<!-- with this option you can add a new contact -->

        <li class="nav-item">
          <a class="nav-link" href="add-number.php"><button type="button" class="btn btn-danger">add contact</button></a>
        </li>
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item">
       
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="who?" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">search</button>
      </form>
    </div>
  </div>
</nav> 
</div>
<!-- here you can see your contact`s-->

<?php foreach($shomareha as $shomare) : ?>

<!-- start of php -->

<div class="container">
<div class="card" >
  <div class="card-header">
    number: <?php echo $shomare["id"]; ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">First name : <?php echo $shomare["fname"]; ?></li>
    <li class="list-group-item">Last name : <?php echo $shomare["lname"]; ?></li>
    <li class="list-group-item">Email : <?php echo $shomare["Email"]; ?></li>
    <li class="list-group-item">Phone  : <?php echo $shomare["phone"]; ?></li>
    <li class="list-group-item">home : <?php echo $shomare["home"]; ?></li>
    <span class="badge bg-danger rounded-pill"><?php echo $shomare["time"]; ?></span>
  </ul>

</div>
</div>
<br>
<!-- end of php -->

<?php endforeach; ?>


<!-- the script connection -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>