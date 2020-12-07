<?php

include('./system/init.php');

$page = 'dashboard';
if (isset($_GET['page'])) {
  $page = clean($_GET['page']);
}

if ($korisnik->jePrijavljen()) {
  // korisnik prijavljen provjeri dozvolu 
  if (!$korisnik->imaDozvolu()) {
    header("location: login.php");
    exit;
  }
} else {
  header("location: login.php");
  exit;
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Administracija</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link href="./assets/css/admin.css" rel="stylesheet">

</head>

<body>

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="?page=home">Administracija</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="?page=home">Naslovna <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=clanci">Vijesti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=korisnici">Korisnici</a>
     

        </ul>

        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $korisnik->getKorisnickoIme(); ?></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?page=profil">Moj profil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?page=logout">Odjava</a>
            </div>
          </li>
        </ul>

      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <main role="main" class="container">
    <?php


    // echo "Dali je prijavljen " . $korisnik->jePrijavljen();

    switch ($page) {
      case 'dashboard':
        include('admin/dashboard.php');
        break;
      case 'clanci':
        include('admin/clanci.php');
        break;
      case 'korisnici':
        include('admin/korisnici.php');
        break;
      case 'profil':
        include('admin/profil.php');
        break;
      case 'logout':
        $korisnik->logout();
        header("location: login.php");
        break;

      default:
        include('admin/dashboard.php');
        break;
    }
    ?>
  </main>

  <footer class="footer">
    <div class="container">
      <span class="text-muted">nikola.filip@tvz.hr</span>
    </div>
  </footer>



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="./assets/js/pwa.js"></script>
</body>

</html>