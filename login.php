<?php
include('./system/init.php');



?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <div id="login">

        <?php


        if (isset($_POST['prijava'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $prijava = $korisnik->login($username, $password);


            if ($prijava) {
                if ($korisnik->imaDozvolu()) {
                    // ima dozvolu baci ga na admin 
                    header("location: admin.php");
                    exit;
                } else {
                    // nema dozvolu baci ga na index
                    header("location: index.php");
                    exit;
                }
            }
        } else if (isset($_POST['registracija'])) {
            // registracija 
            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
         

            $data = array();
            $data['ime'] = $_POST['ime'];
            $data['prezime'] = $_POST['prezime'];
            $data['korisnicko_ime'] = $_POST['username'];
            $data['lozinka'] = $_POST['password'];
        

            $registriran = $korisnik->addUser($data);

            if ($registriran) {
                // registriran, vrati ga na login 
                $_SESSION['poruka'] = "Registracija uspješna";
                header("location: login.php");
                exit;
            }
        } else { ?>

            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " id="prijava-tab" data-toggle="tab" href="#prijava" role="tab" aria-controls="prijava" aria-selected="true">Prijava</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="registracija-tab" data-toggle="tab" href="#registracija" role="tab" aria-controls="registracija" aria-selected="false">Registracija</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- Prijava -->
                            <div class="tab-pane no-gutters fade" id="prijava" role="tabpanel" aria-labelledby="prijava-tab">
                                <div id="login-column" class="col-md-12">
                                    <div id="login-box" class="col-md-12">

                                        <form id="login-form" class="form" action="" method="post" name="login_forma">
                                            <h3 class="text-center text-custom ">Prijava</h3>
                                            <div class="form-group">
                                                <label for="username" class="text-custom">Korisničko ime:</label><br>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Unesite svoje korisničko ime">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="text-custom">Lozinka:</label><br>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Unesite svoju lozinku">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="prijava" class="btn btn-custom btn-md" value="Prijavi" id="btn-prijavi">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- REGISTRACIJA -->
                            <div class="tab-pane no-gutters fade" id="registracija" role="tabpanel" aria-labelledby="registracija-tab">
                                <div id="login-column" class="col-md-12">
                                    <div id="login-box" class="col-md-12">
                                        <form id="registracija-form" class="form" action="" method="post" name="registracija_forma">
                                            <h3 class="text-center text-custom ">Registracija</h3>

                                            <div class="form-group">
                                                <span id="porukaIme" class="bojaPoruke"></span>
                                                <label for="ime" class="text-custom">Ime:</label><br>
                                                <input type="text" name="ime" id="ime" class="form-control" placeholder="Unesite svoje ime">
                                            </div>
                                            <div class="form-group">
                                                <span id="porukaPrezime" class="bojaPoruke"></span>
                                                <label for="about">Prezime: </label>
                                                <div class="form-group">
                                                    <input type="text" name="prezime" id="prezime" class="form-control" requried="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <span id="porukaUsername" class="bojaPoruke"></span>
                                                <label for="text" class="text-custom">Korisničko ime:</label><br>
                                                <input type="username" name="username" id="username" class="form-control" placeholder="Unesite korisničko ime">
                                            </div>
                                            <div class="form-group">
                                            <span id="porukaPass" class="bojaPoruke"></span> 
                                                <label for="password" class="text-custom">Lozinka:</label><br>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Unesite svoju lozinku">
                                            </div>
                                            <div class="form-group">
                                            <span id="porukaPassRep" class="bojaPoruke"></span> 
                                                <label for="password2" class="text-custom">Lozinka ponovo:</label><br>
                                                <input type="password2" name="password2" id="password2" class="form-control" placeholder="Unesite ponovo svoju lozinku">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="submit" name="registracija" class="btn btn-custom btn-md" value="Registriraj" id="btn-registriraj">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        <?php } ?>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="./assets/js/pwa.js"></script>
    <script type="text/javascript">
        document.getElementById("btn-registriraj").onclick = function(event) {
            var slanjeForme = true;
            // Ime korisnika mora biti uneseno 
            var poljeIme = document.getElementById("ime");
            var ime = document.getElementById("ime").value;
            if (ime.length == 0) {
                slanjeForme = false;
                poljeIme.style.border = "1px solid red";
                document.getElementById("porukaIme").innerHTML = "<br>Unesite ime!<br>";
            } else {
                poljeIme.style.border = "1px solid green";
                document.getElementById("porukaIme").innerHTML = "";
            } // Prezime korisnika mora biti uneseno 
            var poljePrezime = document.getElementById("prezime");
            var prezime = document.getElementById("prezime").value;
            if (prezime.length == 0) {
                slanjeForme = false;

                poljePrezime.style.border = "1px solid red";
                document.getElementById("porukaPrezime").innerHTML = "<br>Unesite Prezime!<br>";
            } else {
                poljePrezime.style.border = "1px solid green";
                document.getElementById("porukaPrezime").innerHTML = "";
            } // Korisničko ime mora biti uneseno 
            var poljeUsername = document.getElementById("username");
            var username = document.getElementById("username").value;
            if (username.length == 0) {
                slanjeForme = false;
                poljeUsername.style.border = "1px solid red";
                document.getElementById("porukaUsername").innerHTML = "<br>Unesite korisničko ime!<br>";
            } else {
                poljeUsername.style.border = "1px solid green";
                document.getElementById("porukaUsername").innerHTML = "";
            } // Provjera podudaranja lozinki
            var poljePass = document.getElementById("password");
            var pass = document.getElementById("password").value;
            var poljePassRep = document.getElementById("passRep");
            var passRep = document.getElementById("passRep").value;
            if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
                slanjeForme = false;
                poljePass.style.border = "1px solid red";
                poljePassRep.style.border = "1px solid red";
                document.getElementById("porukaPass").innerHTML = "<br>Lozinke nisu iste!<br>";
                document.getElementById("porukaPassRep").innerHTML = "<br>Lozinke nisu iste!<br>";
            } else {
                poljePass.style.border = "1px solid green";
                poljePassRep.style.border = "1px solid green";
                document.getElementById("porukaPass").innerHTML = "";
                document.getElementById("porukaPassRep").innerHTML = "";
            }
            if (slanjeForme != true) {
                event.preventDefault();
            }

        };
    </script>


</body>

</html>