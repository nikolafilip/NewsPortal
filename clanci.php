<?php 
if(isset($_GET['page']) && $_GET['page'] == 'clanci') {
    // Usli smo u clanke 
    if(isset($_GET['kat'])){
        // imamo i kategoriju 
        $kategorija = clean($_GET['kat']);

        if(isset($_GET['cid'])){
            $clanak_id = clean($_GET['cid']);
            
            $clanak_data = $clanak->getClanak($clanak_id);

            $slika = "no_image.png";
            if(isset($clanak_data['slika']) && !empty($clanak_data['slika'])){
                $slika = $clanak_data['slika'];
            }


            //print_r($clanak_data); ?>

        <section class="<?php echo strtolower($kategorija); ?> clanak">
            <div class="section-heading">
                <h2 class="section-title"><a href="?page=clanci&kat=<?php echo strtolower ($kategorija); ?>" class="heading-link"><?php echo ucfirst($kategorija); ?></a></h2>
            </div>
            <div class="section-content">
                <article>
                    <header>
                        <h1 class="clanak-naslov"><?php echo $clanak_data['naslov']; ?></h1>
                        <span class="clanak-datum"><?php echo $clanak_data['datum']; ?></span>
                    </header>
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <figure class="clanak-slika">
                                    <img src="./images/<?php echo $slika; ?>" class="img-fluid " alt="<?php echo $clanak_data['naslov']; ?>" title="<?php echo $clanak_data['naslov']; ?>">
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="clanak-sazetak">
                                    <?php echo $clanak_data['sazetak'] ?>
                                </p>
                                <p class="clanak-sadrzaj">
                                <?php echo $clanak_data['sadrzaj']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

       <?php } else { ?>

            <section class="sport">
                <div class="section-heading">
                    <h2 class="section-title"><a href="?page=clanci&kat=<?php echo strtolower ($kategorija); ?>" class="heading-link"><?php echo ucfirst($kategorija); ?></a></h2>
                </div>
                <div class="section-content">
                    <ul class="articles">
                    <?php 
                        $clanci = $clanak->getClanci(strtolower ($kategorija)); 

                        if(!empty($clanci)) {
                            
                            foreach ($clanci as $vijest) { 
                                echo "<li>" ;
                                $clanak->ispis_clanka_front($vijest);
                                echo "</li>";
                                
                                
                            } 
                        } else {
                            echo "<li>" ;
                            echo "Trenutno nema clanaka u kategoriji"; 
                            echo "</li>";
                        }
                    ?>
                    </ul>
                </div>
            </section>
       <?php } 
    } 
} else {
    // nesto je cudno !
    echo "GREŠKA: Dogodila se greška! "; 
}