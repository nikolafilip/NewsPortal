<?php

/**
 * Jednostavni wrapper za bazu
 */
class baza {
    
    private $veza; 

    /**
     * Konstruktor za bazu 
     * host, username, password, ime_baze
     */
    public function __construct($host, $username, $password, $ime_baze) {
        $this->veza = new mysqli($host, $username, $password, $ime_baze);

        if (mysqli_connect_error()) {
            die("GREŠKA: Dogodila se greška kod povezivanja s bazom!"); 
        }

        $this->veza->set_charset("utf8");
        $this->veza->query("SET SQL_MODE = ''");
    }

    /**
     * funkcija za slanje upita prema bazi 
     * sql - predstavlja sql upit koji šaljemo bazi
     * 
     * vraća resultset s podacima, brojem redova 
     */
    public function query($sql) {
        $query = $this->veza->query($sql);
        if (!$this->veza->errno){
            if (isset($query->num_rows)) {
                $podaci = array();

                while ($red = $query->fetch_assoc()) {
                    $podaci[] = $red;
                }

                $rezultat = new stdClass();
                $rezultat->num_rows = $query->num_rows;
                $rezultat->row = isset($podaci[0]) ? $podaci[0] : array();
                $rezultat->rows = $podaci;
                
                // brisanje polja - čiščenje memorije
                unset($podaci);

                $query->close();

                // Vrati resultset
                return $rezultat;
            } else {
            return true;
            }
        } else {
            die("GREŠKA: Dogodila se greška kod slanja upita [" . $sql . "] prema bazi! <br /> " . $this->veza->error . "<br /> Kod: " . $this->veza->errno. "<br /> " );
        }
    }

    /**
     * Real escape wrapper
     */
    public function escape($podatak) {
        return $this->veza->real_escape_string($podatak);
    }

    /**
     * Vraća zadnji uneseni ID
     */
    public function zadnji_unos_baza() {
		return $this->veza->insert_id;
    }
    

    public function getVeza(){
        return $this->veza; 
    }


    /**
     * Zatvaranje konekcije 
     */
    public function __destruct() {
		$this->veza->close();
	}




}
?>