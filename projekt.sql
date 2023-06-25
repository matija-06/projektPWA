-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 11:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(11, '25.06.2023.', 'Izgleda da Netflix vraća Titanic na platformu', 'Korisnici: Morbidno i neprimjereno', 'ČINI SE da se Titanic 1. srpnja vraća na Netflix, nedugo nakon što se najpoznatiji brod u povijesti našao u fokusu javnosti zbog tragedije koja se dogodila tijekom ekspedicije podmornicom Titan prema njegovoj olupini na dnu Atlantika.\r\n\r\nPop Culture piše da Netflix planira vratiti film na streaming servis već ovog tjedna. Inače, film je trenutno dostupan za stream na Paramountu+ i Amazon Primeu. Vijest o povratku filma u ovim trenucima pokrenula je raspravu na internetu. Naime, mnogi smatraju da je, s obzirom na tragediju, neprimjereno vrijeme za vraćanje filma na servis.\r\n\r\nNetflix nazivaju \"neosjetljivim\" te pišu da kompaniju zanima samo zarada. \"Ono kad Netflix ne časi ni časa\", pišu korisnici društvenih mreža te čak ovaj potez nazivaju \"morbidnim\". Netflix se još nije oglasio te nije jasno je li odluka o vraćanju filma na streaming servis možda donesena ranije.\r\n\r\nU filmu Leonardo DiCaprio i Kate Winslet glume Jacka Dawsona i Rose DeWitt Bukater, dvoje ljubavnika koji se upoznaju na Titanicu. Kraj filma redatelja Jamesa Camerona je usredotočen na potonuće broda koji su prije tog putovanja predstavljali kao \"nepotopivog\".\r\n\r\nZanimanje za film naglo je poraslo nakon što je podmornica Titan u vlasništvu tvrtke OceanGate implodirala tijekom ekspedicije na kojoj je bilo petero ljudi, uključujući i izvršnog direktora kompanije. Rast na streaming servisima zabilježila je i pjesma stara 26 godina - My Heart Will Go On, naslovna tema filma koju je Celine Dion otpjevala 1997. godine. ', 'titanic.jpg', 'Zabava', 1),
(13, '25.06.2023.', 'Parni valjak s novim pjevačem nastupio u Puli', 'PARNI VALJAK jučer je s novim pjevačem Igorom Drvenkarom nastupio u Puli.', 'U okruženju pulske tvrđave Kaštel okupila se mnogobrojna publika koja je zapjevala s bendom.\r\n\r\nPodsjećamo, ovih se dana na društvenim mrežama oglasio Kristijan Rahimovski i progovorio o odnosima s bendom nakon smrti svog oca Akija. Komentirao je i novog pjevača Parnog valjka.\r\n\r\n\"Igor je u dobrim rukama. Želim mu da se opusti, uživa i da radi to za što je stvoren. To bih i sebi poželio kao i svakom čovjeku na ovoj planeti. Zaslužio je to svojim radom, disciplinom i drugim vrlinama koje ga krase. Ono što sam rekao prije godinu dana iza toga i dalje stojim. Kada god me netko pozove da otpjevam par pjesama za svoga oca to ću s radošću učiniti\", napisao je između ostaloga Kristijan.\r\n\r\nInače, Igor Drvenkar, novi pjevač Parnog valjka, već je pjevao u raznim bendovima, a okušao se i u nekoliko mjuzikala, među kojima su Jesus Christ Superstar, Uskrsli i Ljepotica i Zvijer. Zabavljao je Zagrepčane na dočeku 2022. godine.', 'parni.jpg', 'Zabava', 1),
(14, '25.06.2023.', 'Ovi gradovi proglašeni su najboljima za život u 2023.', 'ISTRAŽIVAČKA tvrtka The Economist Intelligence Unit (EIU) godišnje objavljuje izvješće u kojemu rangira najbolje i najgore gradove za život.', 'U ovom istraživanju kod 173 grada se gledalo i bodovalo pet kategorija: sigurnost, kultura, zdravstvo, obrazovanje i infrastruktura.\r\n\r\nNa prvom mjestu ponovno je Beč. Taj grad osvojio je pohvale za infrastrukturu, izvanrednu kulturu i zabavu te besprijekorne obrazovne i zdravstvene usluge. Beč je više puta zauzeo prvo mjesto na ovoj listi.\r\n\r\nIza Beča nalazi se glavni grad Danske Kopenhagen koji od prošle godine drži drugo mjesto. Na listi ove godine ima velikih povratnika. Melbourne, koji je prošle godine bio na desetom, sada je na trećem mjestu. Sydney, koji se ranije nije nalazio ni u top 10 najpogodnijih gradova za život, sada je na četvrtom mjestu.\r\n\r\nKanada je doživjela veliki uspjeh na ovogodišnjoj listi. U najboljih deset našla su se čak tri  kanadska grada - Vancouver, Calgary i Toronto.\r\n\r\nŠto se tiče najgorih gradova za život, ukrajinski grad Kijev, koji je izostao s popisa 2022. zbog ruske invazije, ove je godine među zadnjima na popisu što je posljedica utjecaja rata. \"Rat u Ukrajini i posljedični ekonomski i politički poremećaji utječu na život u mnogim europskim gradovima\", stoji u izvješću.', 'grad.jpg', 'Zabava', 1),
(39, '25.06.2023.', 'Modrić odmara na luksuznoj jahti u Dubrovniku', 'Naš najbolji nogometaš na zasluženom godišnjem odmoru ', 'LUKA MODRIĆ započeo je godišnji odmor, a prve dane provodi na luksuznoj jahti u blizini Dubrovnika. Radi se o jahti Ferretti Custom Line 120 Erolia, koja može primiti do 10 osoba u pet soba, a dan najma stoji 160 tisuća eura. Trenutno se pak ne može kupiti niti postoje slobodni termini za iznajmljivanje. Za tretman gostiju brine se sedam članova posade.\r\n\r\n\r\nKapetan hrvatske nogometne reprezentacije na jahtu se ukrcao u subotu ujutro u lučici Srebreno u Župi dubrovačkoj, a s njim su obitelj i prijatelji. Prije nego što se ukrcao na jahtu fotografirao se s djelatnicima lokalnog ugostiteljskog objekta, piše ŽupaNet.', 'modric.jpg', 'Sport', 1),
(41, '25.06.2023.', 'Dinamo bi mogao zaraditi 33 milijuna eura', 'Plavi bi i prije nego što lopta krene s centra mogli zaraditi pravo bogatstvo.', 'Gvardiol, Kovačić i Brozović bi mogli Dinamu donijeti bogatstvo.\r\n\r\nGvardiol je u Leipzig prešao prije dvije godine iz Dinama uz odštetu od 18.8 milijuna eura. Dinamo prema ugovoru s Leipzigom dobiva 20 posto od Leipzigove zarade prilikom transfera Gvardiola u treći klub. \r\n\r\nAko bi ga Leipzig prodao za 100 milijuna eura, koliko traži prema zadnjim informacijama, na tom transferu bi u odnosu na uloženo u Gvardiola zaradio 81.2 milijuna eura. Dinamu bi pripalo 20 posto od tog iznosa, a to je oko 16.4 milijuna eura. Hrvatski prvak se stoga nada što većem transferu, kako bi više zaradio.\r\n\r\nCity je već doveo Kovačića iz Chelseaja. City će za hrvatskog reprezentativca platiti 30 milijuna eura, a Chelsea može dobiti još pet milijuna kroz bonuse. Prema propozicijama UEFA-e, klubovi u kojima je igrač proveo period od 12. do 23. rođendana dijele 5 posto vrijednosti transfera. Dinamo prema tom pravilu ima pravo na dva posto od transfera pa će tako dobiti najmanje 600 tisuća eura. \r\n\r\nDinamo će dobiti novac i od posebnih naknada\r\nDinamo ima pravo i na 10% od Brozovićevog transfera. Di Marzio piše da odlazi u saudijski Al Nassr za 23 milijuna eura, što znači da bi Dinamu pripalo 2.3 milijuna eura. No, Dinamo bi uz to imao i pravo na naknadu za Gvardiola i Brozovića i od toga bi mogao zaraditi oko pet milijuna i 300 tisuća eura.\r\n\r\nTa cifra mogla bi dodatno narasti ako se ostvari transfer Danija Olma. Prvak Hrvatske je kod njegove prodaje imao istu klauzulu kao i kod Gvardiola te ima pravo na 20% od Leipzigove zarade od transfera Olma u treći klub. Odštetna klauzula za Olma je 60 milijuna eura, što znači da bi Dinamo od njegovog transfera mogao zaraditi 6.2 milijuna eura i otprilike 2.1 milijun eura naknade.\r\n\r\nUkupno bi Dinamo bez da odigra ijednu utakmicu i bez da proda ijednog igrača, mogao zaraditi oko 33 milijuna eura. To je otprilike pola njegovog prošlogodišnjeg budžeta i više od ukupnog Hajdukovog prošlogodišnjeg budžeta, koji je iznosio oko 30 milijuna eura.', 'josko.jpg', 'Sport', 1),
(42, '25.06.2023.', 'Igraču Partizana dres je do kraja sezone požutio.', 'Partizanov Amerikanac Zach LeDay nosi donji dio dresa koji ima prilično drugačiju boju od dresova njegovih kolega. Razlog je bizaran.', 'Naime, LeDay zbog praznovjerja nije dao klupskom osoblju cijeli sezonu da mu operu hlačice, a odigrao je 74 utakmice. Zato i ne čudi da mu je bijela podloga na hlačicama poprimila žućkastu boju. Mnogi sportaši su praznovjerni i robuju svakodnevnim ritualima. Sjetimo se samo Gorana Ivaniševića tijekom Wimbledona 2001., no za ovakav slučaj još nismo čuli. ', 'partizan.jpg', 'Sport', 1),
(48, '25.06.2023.', 'Putin ne kontrolira Moskvu', 'PROFESOR Goran Bandov, pravnik i politolog, odgovarao je u Dnevniku HTV-a na pitanja koje su slabosti ruskog sigurnosnog sustava, je li i koliko je oslabljen Vladimir Putin te kako bi se marš Wagnerovih plaćenika na Moskvu mogao odraziti na rat u Ukrajini.', 'Za pobunu paravojske Wagner i njezina vođe Jevgenija Prigožina protiv vlastitog ruskog državnog vodstva Goran Bandov je kazao kako mu se čini \"da se radi o jednom običnom igrokazu samo što nismo sigurni jesu li svi sudionici svjesni da su sudjelovali - u igrokazu\".\r\n\r\nPrigožin i Putin nisu bili u potpunosti svjesni?\r\n\"Mislim da sam Prigožin nije u ovu priču ušao potpuno svjestan o tome što mu se sve zapravo događa. S druge strane, nisam siguran ni da je predsjednik Putin u potpunosti svjestan i da je u potpuno kontrolirao ovu situaciju. Očito postoje još neki ozbiljniji igrači u Rusiji koji su uspjeli ovo iskontrolirati\", kazao je.\r\n\r\nPonovio je da su Amerikanci i Britanci znali što će se dogoditi, što znači da je to znao i Putin. Pitanje je zašto se Wagnerov pohod na Moskvu nije spriječio ranije, nego tek u momentu kad je potpuno eskalirao.', 'tenk.jpg', 'Politika', 1),
(60, '25.06.2023.', 'Jandroković o Danu neovisnosti', 'Današnji je dan među onim istaknutim datumima iz moderne hrvatske povijesti kada se s osobitim pijetetom i dubokom zahvalnošću prisjećamo žrtve hrvatskih branitelja', 'Predsjednik Hrvatskoga sabora Gordan Jandroković uputio je u nedjelju čestitku u povodu 25. lipnja - Dana neovisnosti Republike Hrvatske.\r\n\r\n?Uime Hrvatskoga sabora i osobno svim hrvatskim građankama i građanima, svim Hrvaticama i Hrvatima diljem svijeta čestitam Dan neovisnosti.\r\n\r\nDan neovisnosti je spomendan na 25. lipnja 1991. godine, kada Hrvatski je sabor donio Ustavnu odluku o suverenosti i samostalnosti Republike Hrvatske te Deklaraciju o proglašenju suverene i samostalne Republike Hrvatske. Uvertira u te državotvorne odluke, nakon proteka povijesne prve godine hrvatske demokracije, bio je referendum u svibnju iste godine, na kojem je hrvatski narod plebiscitarno iskazao jasnu i nedvosmislenu želju živjeti u samostalnoj, suverenoj i neovisnoj državi. Ipak, do ostvarenja višestoljetnog sna o ponovnoj državnoj samostalnosti, trebalo je prijeći dug i mukotrpan put borbe za slobodu.\r\n\r\nDanašnji je dan među onim istaknutim datumima iz moderne hrvatske povijesti kada se s osobitim pijetetom i dubokom zahvalnošću prisjećamo žrtve hrvatskih branitelja, kao i angažmana svih onih koji su se aktivno uključili u stvaranje i obranu Hrvatske, predvođenih prvim predsjednikom, dr. Franjom Tuđmanom. Isto tako, zahvalnost dugujemo i svim tadašnjim zastupnicama i zastupnicima u Hrvatskom saboru, kao i članovima tadašnje hrvatske vlade.\r\n\r\nNakon prošlogodišnjeg spajanja našeg nacionalnog teritorija Pelješkim mostom, ovog smo siječnja prvo desetljeće članstva u Europskoj uniji nadogradili istovremenim ulaskom u schengenski prostor i europodručje. Time, kao i članstvom u NATO-u, postigli smo naše zacrtane strateške ciljeve, ali i izgradili čvrstu podlogu za ostvarenje novih.\r\n\r\nSvjesni svih uloženih napora i odricanja na putu prema Hrvatskoj kakvu danas imamo, pozvani smo kontinuirano i predano raditi kako bismo ju u budućnosti učinili još sigurnijom i otpornijom, njene institucije učinkovitijima, gospodarstvo snažnijim, a društvo tolerantnijim i solidarnijim. Nastavak našeg zajedničkog angažmana na tom putu ujedno je i najkonkretnija zahvala za svaku žrtvu utkanu u našu slobodu i neovisnost, ali i temeljni preduvjet daljnjeg razvoja Hrvatske, na dobrobit svih njenih građana.\r\n\r\nStoga svim Hrvaticama i Hrvatima, svim hrvatskim građankama i građanima, svima koji su izabrali Hrvatsku kao svoju domovinu i svima onima koji je vole i poštuju, još jednom želim sretan Dan neovisnosti!?, stoji u čestitci predsjednika Hrvatskoga sabora.?', 'jandro.jpg', 'Politika', 1),
(63, '25.06.2023.', 'Jandroković čestitao', 'dsdfgtdfghgdfgh efghfthtyhrt dfhjkgbdfjkgeijrugdfjkg fjghdfjkghdfjkgdfjkgbdfjk dfjghdfjkgdfhjkg', 'dfsgdfhgyjjgr defstgdfghfghjg gdfhfghjh sdfgh', 'jandro.jpg', 'Politika', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(6, 'Ivan', 'Hilje', 'Hiljson', '$2y$10$D8OphxlojdzYtsnIVEZJCueyBYaAGmlP5xZi1fyc0jtvzd8rz6C5O', 0),
(7, 'LeBron', 'James', 'Goat', '$2y$10$ciFmahQSi5XQdXv37AoQAuLalpFDAsDzjFzB8qKkmk.EPMvaS7y1.', 0),
(9, 'Matija', 'Kurpez', 'Kurpi', '$2y$10$tshKomN9.4xuZZhdo89LEOHGAbu.nMkJ0wrnz0QLdF/DANSthxkem', 1),
(12, 'Matija', 'Kurpez', 'lilkurpi', '$2y$10$ZSa2OoTo1v1.yVszGgGdDeU.ubmO9T4WP0Ap3XOsqAMFpQWyCys3W', 0);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
