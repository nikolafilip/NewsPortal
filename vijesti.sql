-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 11:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vijesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp(),
  `naslov` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(3, '2020-06-09', 'Sammir: Bjelica će za mene uvijek biti mali trener', 'Sammir je na početku podcasta govorio o svom vremenu u Dinamu za koji tvrdi da je uvijek bio korektan prema njemu, a iskreno je priznao i kako se &quot;sedam godina zajebavao u Dinamu&quot;', 'BIVŠI nogometaš Dinama i trenutna desetka Lokomotive, legendarni Sammir, gostuje u A1 Nogometnom Podcastu kod Ivana Ivkovića.\r\n\r\nSammir je na početku podcasta govorio o svom vremenu u Dinamu za koji tvrdi da je uvijek bio korektan prema njemu, a iskreno je priznao i kako se &quot;sedam godina zajebavao u Dinamu&quot;.\r\n\r\n&quot;Mnogi ne znaju, ali ja sam se trebao i treći put vratiti u Dinamo. Vratio sam se iz Kine i razgovarao sa Zdravkom koji mi je rekao da me želi, onda mi je i Bjelica rekao da me želi, ali mi se nisu javili&quot;, rekao je Sammir pa je dodao:', 'a1cb71dc-e8b0-4085-9be7-7d85dde7a7ba.jpg', 'sport', 0),
(4, '2020-01-03', 'Trener Parme: Imao sam koronu, ali nisam imao pojma', 'TRENER Parme Roberto D\'Aversa potvrdio je da je bio zaražen koronavirusom. Tako je postao trećim trenerom iz Serie A za kojeg se zna da je bolovao od korone uz Gian Piera Gasperinija iz Atalante i Beppea Iachinija iz Fiorentine. ', 'TRENER Parme Roberto D\'Aversa potvrdio je da je bio zaražen koronavirusom. Tako je postao trećim trenerom iz Serie A za kojeg se zna da je bolovao od korone uz Gian Piera Gasperinija iz Atalante i Beppea Iachinija iz Fiorentine. \r\n\r\n&quot;Imao sam slabije simptome, potvrđeno je tek kad sam odradio testiranje. Nekoliko dana nakon utakmice sa SPAL-om imao sam temperaturu&quot;, rekao je D\' Aversa za službeni portal kluba pa dodao: &quot;Nije bilo ništa strašno pa je tek nedavno potvrđeno. Često tijekom godine dobijem temperaturu pa nisam obraćao pažnju. Drago mi je samo da napokon opet možemo pričati o nogometu.&quot;', 'dd7ffc4b-4471-4150-960f-962cc10c778d.jpg', 'sport', 0),
(5, '2020-01-01', 'Sindikati prozivaju poslodavce', 'U Hrvatskoj, međutim, političke stranke nude optimistične slike i želje, ali ne govore koji sektori i slojevi društva mogu dati više općem interesu i koji se segmenti mogu odricati.', 'Predsjednik Matice Vilim Ribić rekao je na konferenciji za novinare da su druge zemlje, poput SAD-a, Engleske, čak i Srbije, davale izdašne naknade građanima i nezaposlenima kako bi se sačuvala potražnja i cijena rada.\r\n\r\nU Hrvatskoj, međutim, političke stranke nude optimistične slike i želje, ali ne govore koji sektori i slojevi društva mogu dati više općem interesu i koji se segmenti mogu odricati.\r\n\r\nPoslodavce je prozvao da su &quot;podmetnuli kukavičje jaje&quot; dijeleći gospodarstvo na javni i privatni sektor i svaljujući krivnju na radnike u javnom sektoru.\r\n\r\nSmatra da se time zamagljuje najvažnije pitanje - zašto nitko ne traži od bogatih da participiraju u snošenju tereta krize, što je neizostavna tema u zapadnom svijetu.\r\n\r\nKod nas, upozorio je, tema bogatih nije u fokusu već se stranke natječu tko će više smanjiti porez na visoke plaće.\r\n\r\n&quot;Ne bi li sad progresivno oporezivanje trebalo pokupiti ono što bogati uživaju, zahvaljujući \'Superhik\' politici HDZ-a, i ne bi li SDP trebao o tome govoriti, a ne o smanjenju poreza na dobit, što nema nikakav specijalni utjecaj na rast investicija, poduzetništva i nacionalnog dohotka?, kaže Ribić.', 'pxl-161019-26448253.jpg', 'politika', 0),
(6, '2020-05-05', 'Mirela Holy: Nisam zainteresirana biti kandidatkinja SDP-a za gr', 'BIVŠA ministrica zaštite okoliša Mirela Holy u utorak je rekla da je u neformalnom razgovoru s nekim ljudima iz gradskog SDP-a, a ne službeno iz vodstva, dobila ponudu da bude kandidatkinja stranke za gradonačelnicu Zagreba, te da im je odgovorila da nije zainteresirana.  ', 'BIVŠA ministrica zaštite okoliša Mirela Holy u utorak je rekla da je u neformalnom razgovoru s nekim ljudima iz gradskog SDP-a, a ne službeno iz vodstva, dobila ponudu da bude kandidatkinja stranke za gradonačelnicu Zagreba, te da im je odgovorila da nije zainteresirana.  \r\n\r\n&quot;U vrlo neformalnom razgovoru ti su ljudi rekli kako misle da bih bila dobra kandidatkinja SDP-a za gradonačelnicu grada Zagreba na čemu sam im zahvalna jer smatraju da imam određene kvalitete, međutim ja sam im tada odgovorila da nisam zainteresirana za to&quot;, izjavila je Hini Mirela Holy.\r\n\r\nKaže da joj je glupo da o tome uopće sada govori jer ni s kim iz vodstva SDP-a nije razgovarala. \r\n\r\nRekla je da se s tim ljudima vidjela prošli tjedan.   \r\n\r\nNa pitanje bi li prihvatila kandidaturu za gradonačelnicu Zagreba kada bi joj ponuda došla službeno iz vodstva stranke, Holy odgovara da uopće nije razmišljala o tome', '74fae72d-d1b0-4183-b1fb-9b66ed776c2d.jpg', 'politika', 0),
(7, '2020-03-03', 'Kako je Stožer ponizio znanost i otvorio vrata teoretičarima zav', 'HRVATSKI ogranak pandemije covida-19 dobio je dvije neočekivane posljedice. Prva je streloviti politički uspon tek imenovanog ministra zdravstva Vilija Beroša, koji je dotad bio samo anonimni pomoćnik notornog Milana Kujundžića. ', 'Nisu više jasni i nedvosmisleni\r\n\r\nNacionalni stožer civilne zaštite proteklih je tjedana donio više odluka čiji se motivi mogu prije pripisati politici nego znanosti. Postali su nedosljedni, netransparentni, objašnjenja i poruke više nisu jasni i nedvosmisleni kao na početku. Sve je to imalo za posljedicu da ubrzano pada povjerenje ne samo u Stožer nego i u epidemiološku struku, a samim tim raste opasnost od promoviranja teorija zavjera i njihovih zagovaratelja, ali i opasnost od budućih epidemija u kojima građani neće imati čvrsto povjerenje u epidemiologe, odnosno znanstvenike.\r\n\r\nPredizborne usluge Crkvi\r\n\r\nPovjerenje u Stožer i epidemiologe počelo se rasipati uoči Uskrsa, kada su dozvolili procesije po otoku Hvaru dok su istovremeno zabranjivali kretanje, slali policiju na šetače, tupili nam svima da ostanemo u svojim kućama i da se nipošto ne približavamo jedni drugima. No stoljetna vjerska tradicija dobila je propusnicu od Stožera i nosači križeva i njihovi pratitelji mogli su kružiti otokom, sasvim slučajno istim otokom s kojeg potječu Vili Beroš i Andrej Plenković. ', 'e0fa50d5-5146-400d-8b82-6fab6f5dc087.jpg', 'politika', 0),
(10, '2020-04-20', 'Petrov: Vlada nas ne čuje, ovo nije njihova mala varoš', 'ČELNIK Mosta Božo Petrov, koji u srijedu u saboru predstavlja paket Mostovih zakona za pomoć građanima i poduzetnicima pogođenima posljedicama koronavirusa, vladine je prijedloge nazvao polovičnima i zakašnjelima, dok je vladu pozvao da čuje i uvažava oporbene prijedloge.', 'Ne očekujem od vladajućih zahvalu za sve naše prijedloge jer nikada nisu pokazali zainteresiranost za naše amandmane. No ovo nije jedna njihova mala varoš već pitanje cijele države i svih građana te bi trebali biti skromni i ponizni i voditi računa da građani i poslodavci budu zaštićeni. Trebali bi čuti i uvažiti mišljenje i drugih ljudi?, kazao je Petrov.', 'c139a011-95d6-48ae-b49c-c16ffd6b49fb.jpg', 'politika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) COLLATE latin2_croatian_ci NOT NULL,
  `prezime` varchar(30) COLLATE latin2_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(30) COLLATE latin2_croatian_ci NOT NULL,
  `lozinka` varchar(255) COLLATE latin2_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(7, 'Nikola', 'Filip', 'admin', '$2y$10$FKxnP7gac5NBsgaWA6/13OeFJGaUCaf9g1H3hJ8Saf74poK/esK92', 1),
(9, 'ivan', 'ivan', 'ivan', '$2y$10$9A7kokRtnt/8PLrNMsPVxuI5jr5QXf9/P1d99oPF15BNKoThI5qSy', 0),
(10, 'mia', 'mia', 'mia', '$2y$10$.KCCYt.EVCVsixK3AM97t..8F2gM06zjKQoKLxWn/Am/pIHQfGF2y', 1),
(11, 'nikola', 'filip', '', '$2y$10$Wndp.I4ETiN7sxoubdDAL.GETvNPoidi59zIz6pBFoXWYhAzk/Uo6', 0),
(12, 'ena', 'ena', 'ena', '$2y$10$0.FW9dRovoW8XrXpZ3th9.f8EqR.PyYZBbvXCSreKxTYuOPXei3fe', 0),
(13, 'Petar', 'Petric', 'Petar', '$2y$10$a4c0eY1iiqEieRJTs698q.00IUend/snK5Swxo2cYcgWZmfxSmhiC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE `vijest` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `vijest`
--
ALTER TABLE `vijest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vijest`
--
ALTER TABLE `vijest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
