<nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="?page=home"><img src="./images/logo.png" alt="RP-Online naslovnica" class="d-inline-block align-top" id="page-logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="?page=clanci&kat=sport">Sport</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="?page=clanci&kat=politika">Politik</a>
                        </li>
                        <li class="nav-item">
                        <?php if($korisnik->jePrijavljen()) {
                          // korisnik je prijavljen
                          if($korisnik->imaDozvolu()){
                            // daj mu admin link
                            echo '<a class="nav-link" href="./admin.php">Administracija</a>'; 
                          } else {
                            // nema dozvolu daj mu link za odjavu 
                            echo '<a class="nav-link" href="?page=logout">Odjava</a>';
                          }
                        } else {
                          // nije prijavljen daj mu link do administracije
                          echo '<a class="nav-link" href="./admin.php">Administracija</a>'; 
                        }
                        
                        ?>
                        
                          
                        </li>
                      </ul>
                </div>
            </nav>