<!DOCTYPE HTML>
<html>

<head>

   <meta charset="UTF-8">
   <link rel="stylesheet" href="11.css">
  <title>Željeznicka stanica </title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="11.css" />
  
<script type="text/javascript">
timeID = null;
timeRunning = false;
var current = "";
function stop(){
    if(timeRunning){
    clearTimeout(timeID);
    timeRunning = false;
    }
}
function time(){
tick = new Date();
hours = tick.getHours();
minutes = tick.getMinutes();
seconds = tick.getSeconds();
current = "" + hours + '';
current += ((minutes < 10) ? ":0" : ":") + minutes;
current += ((seconds < 10) ? ":0" : ":") + seconds + " - ";
month = tick.getMonth();
date = tick.getDate();
year = tick.getFullYear();
day = tick.getDay();
var days=new Array(" Nedjelja"," Ponedjeljak", " Utorak", " Srijeda", " Èetvrtak", " Petak", " Subota")
var danutjednu = days[day];
current +=(danutjednu);
current +=", "+date+""+".";
current +=((month<13) ? month+1:month)+ ".";
current +=year;
document.getElementById("vrijeme").innerHTML = current;
timeID = setTimeout("time()",1000);
timeRunning = true;
}
function runClock(){
stop();
time();
}
</script>

</head>

<body onload="runClock()">
 
  
  <div id="content_header">   
 
<form action="/login.php" method="get">    
 
<button class="button"><span> PRIJAVA </span></button>

   </form>

  <form action="./login.php" + PR2name><input type="submit" value="POČETNA">
  
  </form>


   <span button type="button" class="block"><b> ŽELJEZNICKA STANICA
<span div class="block1">
 <script type="text/javascript">document.write(" <span id='vrijeme' style=' ;  float:left;font-weight:bold; font-size:17px;'></span> ")</script>
<noscript><p> ;).</noscript>

  </div>
     </span> 
  
<div class="gallery">
<div class="gallery-image">
  <img src="slika.jpg"  />
  
<div class="gallery-text">

<div class="card">
  
 

 
 

 
</div>
	<div class="imena"> 
	
	</div>	      
</div>  
</div>
<p class="naslov"><strong>VIZIJA PROJEKTA</strong></p>	
	
	

   


	  <div class="footer">
	
</div>
 <div class="rezerviraj"> <h1>- REZERVIRAJTE SVOJU KARTU I UÅ½IVAJTE U VOÅ½NJI - <h1>
 
 </div>

  

 
   
   
 

	
	



 <div class="VIZIJA">
<div>
	<div>
		<p>
			<strong>FPMOZ</strong>
			<strong>Informatika</strong>
			<strong>-</strong>
			<strong>Mostar</strong>
			<strong>2017/2018</strong>
		</p>
	</div>
	<p align="right">
		<strong>Web aplikacija za rezervaciju karte </strong>
	</p>
</div>
<strong>
	<br clear="all"/>
</strong>
<div>
</div>
<br clear="all"/>
<div>




	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="198" valign="top">
					<p>
						Problem
					</p>
				</td>
				<td width="390" valign="top">
					<p align="center">
						<strong>
							Radi jednostavnijeg planiranja svojeg vremena,
							onima koji nisu u blizini, niti su u
							mogu&#263;nosti do&#263;i osobno, niti mo&#382;da
							&#382;ele tro&#353;iti svoje dragocjeno vrijeme,
							preko aplikacije mogu brzo I jednostavno provjeriti
							vozni red i rezervirati svoje mjesto.
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="198" valign="top">
					<p>
						Doseg problema
					</p>
				</td>
				<td width="390" valign="top">
					<p align="center">
						<strong>
							<br/>
							Gu&#382;va na &#353;alterima
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="198" valign="top">
					<p>
						Posljedica problema
					</p>
				</td>
				<td width="390" valign="top">
					<p align="center">
						<strong>
							Ka&#353;njenje putnika, slaba organiziranost ..itd
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="198" valign="top">
					<p>
						Rje&#353;enje
					</p>
				</td>
				<td width="390" valign="top">
					<p align="center">
						<strong>Zapo&#353;ljavanje novih radnika</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<strong>2.</strong>
		<strong>2</strong>
		<strong>Namjena</strong>
		<strong>sustava</strong>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="186" valign="top">
					<p>
						Za
					</p>
				</td>
				<td width="360" valign="top">
					<p align="center">
						<strong>Sve &#382;eljezni&#269;ke kolodvore</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="186" valign="top">
					<p>
						Koje
					</p>
				</td>
				<td width="360" valign="top">
					<p align="center">
						<strong>
							Oni kojima u&#353;teda vremena u danu mnogo
							zna&#269;i.
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="186" valign="top">
					<p>
						Naziv produkta
					</p>
				</td>
				<td width="360" valign="top">
					<p align="center">
						<strong>
							Web aplikacija za rezervaciju karte za vlak
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="186" valign="top">
					<p>
						Prednosti kori&#353;tenja sustava
					</p>
				</td>
				<td width="360" valign="top">
					<p align="center">
						<strong>
							<br/>
							Brzina, lako&#263;a i jednostavnost rezerviranja i
							provjera voznih redova vlakova.
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		!FPMOZ Sveu&#269;ili&#353;te u Mostaru - 2017 4
	</p>
</div>
<br clear="all"/>
<div>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="425" valign="top">
					<p>
						<strong>
							Web aplikacija za rezervaciju karte za vlak
						</strong>
					</p>
				</td>
				<td width="212" valign="top">
					<p>
						Verzija: &lt;1.0&gt;
					</p>
				</td>
			</tr>
			<tr>
				<td width="425" valign="top">
					<p>
						Vizija
					</p>
				</td>
				<td width="212" valign="top">
					<p>
						Date: 13/05/11
					</p>
				</td>
			</tr>
			<tr>
				<td width="637" colspan="2" valign="top">
					<p>
						<strong>
							Web aplikacija za rezervaciju karte za vlak
						</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<strong>3.</strong>
		<strong>Opis</strong>
		<strong>sudionika</strong>
		<strong>i</strong>
		<strong>davatelja</strong>
		<strong>zahtjeva</strong>
	</p>
	<p>
		<strong>3.</strong>
		<strong>1</strong>
		<strong>Pregled</strong>
		<strong>davatelja</strong>
		<strong>zahtjeva</strong>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="585" colspan="3" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>e</strong>
						<strong>Opis</strong>
						<strong>Odgovornosti</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="150" valign="top">
					<p>
						<strong>
							<br/>
							&#381;eljezni&#269;ka stanica "Mostar"
						</strong>
						<strong></strong>
					</p>
				</td>
				<td width="161" valign="top">
					<p>
						<strong>
							<br/>
							Prijevoz putnika
						</strong>
						<strong></strong>
					</p>
				</td>
				<td width="274" valign="top">
					<p>
						A&#382;uriranje baze podataka, te administracija
						stranice
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<strong>3.</strong>
		<strong>2</strong>
		<strong>Pregled</strong>
		<strong>korisnika</strong>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="597" colspan="4" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>e</strong>
						<strong>Opis</strong>
						<strong>Odgovornosti</strong>
						<strong>Davatelj</strong>
						<strong>zahtjeva</strong>
						<strong>koji</strong>
						<strong>prezentira</strong>
						<strong>interese</strong>
						<strong>sudionika</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="94" valign="top">
					<p>
						Gost
					</p>
				</td>
				<td width="161" valign="top">
					<p>
						<strong>
							Koristi sustav za rezervaciju karata online, i ima
							uvide u sve vozne redove &#382;eljezni&#269;ke
							stanice
						</strong>
						<strong></strong>
					</p>
				</td>
				<td width="154" valign="top">
					<p>
						<strong>Pr</strong>
						<strong>u</strong>
						<strong>&#382;</strong>
						<strong>a</strong>
						<strong>
							osnovne informacije sustavu te ima mogu&#263;nost
							a&#382;uriranja tih podataka.
						</strong>
					</p>
				</td>
				<td width="189" valign="top">
					<p>
						<strong>
							<br/>
							<br/>
							<br/>
							&#381;eljezni&#269;ka stanica "Mostar"
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="94" valign="top">
					<p>
						Voditelj prodaje i nabave
					</p>
				</td>
				<td width="161" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>uv</strong>
						<strong>i</strong>
						<strong>d</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>sv</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>od</strong>
						<strong>at</strong>
						<strong>k</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>
							svim voznim redovima te ima uvid u osnovne
							informacije o tvrtki.
						</strong>
					</p>
				</td>
				<td width="154" valign="top">
					<p>
						<strong></strong>
					</p>
				</td>
				<td width="189" valign="top">
					<p>
						<strong>
							<br/>
							<br/>
							&#381;eljezni&#269;ka stanica "Mostar"
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="94" valign="top">
					<p>
						Direktor
					</p>
				</td>
				<td width="161" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong>
							uvid u osnovne podatke o voznim redovima te ima
							uvid u sve informacije o tvrtki.
						</strong>
					</p>
				</td>
				<td width="154" valign="top">
					<p>
						<strong>Mo</strong>
						<strong>g</strong>
						<strong>u</strong>
						<strong>&#263;</strong>
						<strong>n</strong>
						<strong>os</strong>
						<strong>t</strong>
						<strong>
							a&#382;uriranja informacija o voznim redovima te
							ima uvid u poslovanje tvrtke i ima mogu&#263;nost
							a&#382;uriranja osobnih podataka.
						</strong>
					</p>
				</td>
				<td width="189" valign="top">
					<p>
						<strong>
							<br/>
							<br/>
							&#381;eljezni&#269;ka stanica "Mostar"
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="94" valign="top">
					<p>
						Moderator
					</p>
				</td>
				<td width="161" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>uv</strong>
						<strong>i</strong>
						<strong>d</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>v</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong>n</strong>
						<strong>for</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong>c</strong>
						<strong>ije</strong>
						<strong>
							pohranjene u bazi podataka te vodi ra&#269;una o
							radu samog sustava
						</strong>
					</p>
				</td>
				<td width="154" valign="top">
					<p>
						<strong>Mo</strong>
						<strong>g</strong>
						<strong>u</strong>
						<strong>&#263;</strong>
						<strong>n</strong>
						<strong>os</strong>
						<strong>t</strong>
						<strong>
							a&#382;uriranja svih podataka u bazi podataka,
							dodavanje i brisanje novih korisnika. I svih
							ostalih informacija
						</strong>
						.
					</p>
				</td>
				<td width="189" valign="top">
					<p>
						<strong>
							<br/>
							&#8222; &#381;eljezni&#269;ka stanica "Mostar"
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="94" valign="top">
					<p>
						Administrator
					</p>
				</td>
				<td width="161" valign="top">
					<p>
						<strong>U</strong>
						<strong>vi</strong>
						<strong>d</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>v</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>at</strong>
						<strong>k</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> odr&#382;avanje samog sustava</strong>
					</p>
				</td>
				<td width="154" valign="top">
					<p>
						<strong>Mo</strong>
						<strong>g</strong>
						<strong>u</strong>
						<strong>&#263;</strong>
						<strong>n</strong>
						<strong>os</strong>
						<strong>t</strong>
						<strong> </strong>
						<strong>a</strong>
						<strong>&#382;</strong>
						<strong>u</strong>
						<strong>riranj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong>
							brisanja svih podataka kao i odr&#382;avanje samog
							sustava Dodavanje i brisanje korisnika. Ukazivanje
							na nepravilnosti u radu sustava
						</strong>
					</p>
				</td>
				<td width="189" valign="top">
					<p>
						<strong>
							<br/>
							<br/>
							<br/>
							<br/>
							&#381;eljezni&#269;ka stanica "Mostar"
						</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<br clear="all"/>
<div>
	<p>
		<strong>3.</strong>
		<strong>3</strong>
		<strong>Korisni&#269;ko</strong>
		<strong>okru&#382;enje</strong>
	</p>
	<p>
		Ovaj sustav je zami&#353;ljen tako da ga koristi &#353;irok spektar
		ljudi od obi&#269;nih korisnika do samog osoblja trgovine, kao takav
		mora biti dostupan u bilo koje doba i na bilo kojem mjestu, idealna
		platforma za takav sustav bi bilo web. Sustav mora biti u
		mogu&#263;nosti prihvatiti jako velik broj zahtjeva i poslu&#382;iti
		veliki broj korisnika odjednom. Tako&#273;er sustav mora voditi
		evidenciju o registriranim &#269;lanovima &#382;eljezni&#269;ke stanice
		kao i raspoznavati ih na osnovu korisni&#269;kog imena i lozinke te im
		dodijeliti odre&#273;ene privilegije koje mogu izvr&#353;avati nad
		sustavom. Tako&#273;er budu&#263;i da sustav je dostupan &#353;irokom
		spektru korisnika mora se omogu&#263;iti jednostavno i intuitivno
		korisni&#269;ko su&#269;elje svakom korisniku.
	</p>
	<p>
		<strong>3.</strong>
		<strong>4</strong>
		<strong>Profil</strong>
		<strong>davatelja</strong>
		<strong>
			zahtjeva
			<br/>
		</strong>
	</p>
	<p>
		<em>3.</em>
		<em>4</em>
		<em>.</em>
		<em>1</em>
		<strong><em>&#381;eljezni&#269;ka stanica Mostar</em></strong>
		<em></em>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="185" valign="top">
					<p>
						Predstavnik
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>St</strong>
						<strong>u</strong>
						<strong>d</strong>
						<strong>e</strong>
						<strong>nt</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>Inf</strong>
						<strong>o</strong>
						<strong>r</strong>
						<strong>ma</strong>
						<strong>t</strong>
						<strong>ike</strong>
						<strong> </strong>
						<strong>3</strong>
						<strong>.</strong>
						<strong> </strong>
						<strong>g</strong>
						<strong>od</strong>
						<strong>in</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>F</strong>
						<strong>P</strong>
						<strong>M</strong>
						<strong>OZ</strong>
						<strong>-</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>M</strong>
						<strong>ost</strong>
						<strong>a</strong>
						<strong>r</strong>
						<strong>u</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Opis
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>
							Za rezervaciju je potrebno kreirati sustav i bazu
							podataka kako bi svoje mjesto u vlaku mogli
							rezervirati sa par klikova.
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Tip
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>&#381;eljezni&#269;ka stanica</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Odgovornosti
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>D</strong>
						<strong>etaljn</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>pr</strong>
						<strong>e</strong>
						<strong>ciz</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>pr</strong>
						<strong>e</strong>
						<strong>dst</strong>
						<strong>a</strong>
						<strong>vit</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>tjeve</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>reir</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Kriteriji uspjeha
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>K</strong>
						<strong>reira</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>&#353;</strong>
						<strong>t</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>b</strong>
						<strong>o</strong>
						<strong>ljeg</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>jed</strong>
						<strong>no</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>nije</strong>
						<strong>g</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>jako</strong>
						<strong> </strong>
						<strong>d</strong>
						<strong>o</strong>
						<strong>b</strong>
						<strong>r</strong>
						<strong>o</strong>
						<strong>
							optimiziran , potrebno je sustav sto bolje
							optimizirati da ga sto bolje prezentirali novim
							korisnicima preko web tra&#382;ilica
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Uklju&#269;enost u projekt
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>gle</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>ust</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>,</strong>
						<strong> </strong>
						<strong>a&#382;</strong>
						<strong>u</strong>
						<strong>rira</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>ta</strong>
						<strong>k</strong>
						<strong>a</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<strong>3.</strong>
		<strong>5</strong>
		<strong>Profili</strong>
		<strong>krajnjih</strong>
		<strong>sudionika</strong>
	</p>
	<p>
		<em>3.</em>
		<em>5</em>
		<em>.</em>
		<em>1</em>
		<em>
			Gost
			<br/>
			<br/>
			<br/>
		</em>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="185" valign="top">
					<p>
						Predstavnik
					</p>
				</td>
				<td width="359" valign="top">
					<p align="center">
						<strong>S</strong>
						<strong>v</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>po</strong>
						<strong>tencijalni</strong>
						<strong> </strong>
						<strong>putnici.</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Opis
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>K</strong>
						<strong>orist</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>s</strong>
						<strong>ta</strong>
						<strong>v</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>nlin</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>rezervaciju karata</strong>
						<strong>.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Tip
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>s</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong>vn</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>e</strong>
						<strong>d</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>a</strong>
						<strong>&#269;</strong>
						<strong>u</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>l</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>ko</strong>
						<strong>ri&#353;te</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>Int</strong>
						<strong>e</strong>
						<strong>rn</strong>
						<strong>e</strong>
						<strong>ta</strong>
						<strong>.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Odgovornosti
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>est</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>re</strong>
						<strong>c</strong>
						<strong>izno</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>v</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>t</strong>
						<strong>jeve</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong>slu</strong>
						<strong>g</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o&#269;</strong>
						<strong>e</strong>
						<strong>k</strong>
						<strong>u</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong> sustava.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Kriteriji uspjeha
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>Ja</strong>
						<strong>s</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>r</strong>
						<strong>e</strong>
						<strong>d</strong>
						<strong>s</strong>
						<strong>ta</strong>
						<strong>v</strong>
						<strong>l</strong>
						<strong>janje</strong>
						<strong> </strong>
						<strong>sv</strong>
						<strong>o</strong>
						<strong>ji</strong>
						<strong>h</strong>
						<strong> </strong>
						<strong>za</strong>
						<strong>h</strong>
						<strong>tje</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>su</strong>
						<strong>s</strong>
						<strong>tavu.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Uklju&#269;enost u projekt
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>S</strong>
						<strong>am</strong>
						<strong>i</strong>
						<strong>m</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>dj</strong>
						<strong>e</strong>
						<strong>lovanjem</strong>
						<strong> </strong>
						<strong>mo</strong>
						<strong>&#382;</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>d</strong>
						<strong>o</strong>
						<strong>p</strong>
						<strong>ri</strong>
						<strong>n</strong>
						<strong>ijeti</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>ob</strong>
						<strong>olj&#353;a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong>
							osoba prema kojoj je sustav orijentiran.
						</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<br clear="all"/>
<div>
	<p>
		<em>3.</em>
		<em>5</em>
		<em>.</em>
		<em>2</em>
		<em>Voditelj</em>
		<em>P</em>
		<em>rodaje/Nabave</em>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="185" valign="top">
					<p>
						Predstavnik
					</p>
				</td>
				<td width="359" valign="top">
					<p align="center">
						<strong>A</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> Kordi&#263;</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Opis
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>K</strong>
						<strong>orist</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>s</strong>
						<strong>ta</strong>
						<strong>v</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>nlin</strong>
						<strong>e</strong>
						<strong>
							rezervaciju karata, i evidenciju o polascima I
							dolascima
						</strong>
						<strong> vlakova.</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Tip
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>sn</strong>
						<strong>o</strong>
						<strong>v</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>re</strong>
						<strong>d</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>ra&#269;</strong>
						<strong>un</strong>
						<strong>al</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>ori&#353;t</strong>
						<strong>e</strong>
						<strong>nj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>I</strong>
						<strong>n</strong>
						<strong>terneta.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Odgovornosti
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>est</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>re</strong>
						<strong>c</strong>
						<strong>izno</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>v</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>t</strong>
						<strong>jeve</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong>slu</strong>
						<strong>g</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o&#269;</strong>
						<strong>e</strong>
						<strong>k</strong>
						<strong>u</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong> sustava.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Kriteriji uspjeha
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>Ja</strong>
						<strong>s</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>r</strong>
						<strong>e</strong>
						<strong>d</strong>
						<strong>s</strong>
						<strong>ta</strong>
						<strong>v</strong>
						<strong>l</strong>
						<strong>janje</strong>
						<strong> </strong>
						<strong>sv</strong>
						<strong>o</strong>
						<strong>ji</strong>
						<strong>h</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>tje</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>vu</strong>
						<strong>.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Uklju&#269;enost u projekt
					</p>
				</td>
				<td width="359" valign="top">
					<p>
						<strong>O</strong>
						<strong>s</strong>
						<strong>o</strong>
						<strong>b</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>g</strong>
						<strong>o</strong>
						<strong>v</strong>
						<strong>or</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong>&#353;e</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>putnika</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>b</strong>
						<strong>az</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>taka.</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<em>3.</em>
		<em>5</em>
		<em>.</em>
		<em>3</em>
		<em>Direktor</em>
	</p>
	<table border="0" cellspacing="0" cellpadding="0" width="624">
		<tbody>
			<tr>
				<td width="161" valign="top">
					<p>
						Predstavnik
					</p>
				</td>
				<td width="463" valign="top">
					<p align="center">
						<strong>Doris Crnjak</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="161" valign="top">
					<p>
						Opis
					</p>
				</td>
				<td width="463" valign="top">
					<p>
						<strong>K</strong>
						<strong>orist</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>s</strong>
						<strong>ta</strong>
						<strong>v</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>nlin</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>rezervaciju karata I ima </strong>
						<strong> m</strong>
						<strong>o</strong>
						<strong>gu</strong>
						<strong>&#263;n</strong>
						<strong>o</strong>
						<strong>s</strong>
						<strong>t</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>re</strong>
						<strong>g</strong>
						<strong>le</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>ja</strong>
						<strong>
							podataka o radu sustava i podataka o radu same
							&#381;eljezni&#269;ke postaje.
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="161" valign="top">
					<p>
						Tip
					</p>
				</td>
				<td width="463" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>sn</strong>
						<strong>o</strong>
						<strong>v</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>re</strong>
						<strong>d</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>ra&#269;</strong>
						<strong>un</strong>
						<strong>al</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>ori&#353;t</strong>
						<strong>e</strong>
						<strong>nj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>I</strong>
						<strong>n</strong>
						<strong>terneta.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="161" valign="top">
					<p>
						Odgovornosti
					</p>
				</td>
				<td width="463" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>est</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>re</strong>
						<strong>c</strong>
						<strong>izno</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>v</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>t</strong>
						<strong>jeve</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong>slu</strong>
						<strong>g</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o&#269;</strong>
						<strong>e</strong>
						<strong>k</strong>
						<strong>u</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong> sustava.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="161" valign="top">
					<p>
						Kriteriji uspjeha
					</p>
				</td>
				<td width="463" valign="top">
					<p>
						<strong>Ja</strong>
						<strong>s</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>r</strong>
						<strong>e</strong>
						<strong>d</strong>
						<strong>s</strong>
						<strong>ta</strong>
						<strong>v</strong>
						<strong>l</strong>
						<strong>janje</strong>
						<strong> </strong>
						<strong>sv</strong>
						<strong>o</strong>
						<strong>ji</strong>
						<strong>h</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>tje</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>vu</strong>
						<strong>.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="161" valign="top">
					<p>
						Uklju&#269;enost u projekt
					</p>
				</td>
				<td width="463" valign="top">
					<p>
						<strong>O</strong>
						<strong>s</strong>
						<strong>o</strong>
						<strong>b</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>g</strong>
						<strong>o</strong>
						<strong>v</strong>
						<strong>or</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>v</strong>
						<strong>o</strong>
						<strong>&#273;</strong>
						<strong>e</strong>
						<strong>n</strong>
						<strong>je</strong>
						<strong> </strong>
						<strong>t</strong>
						<strong>v</strong>
						<strong>rtk</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>g</strong>
						<strong>ledanje</strong>
						<strong> </strong>
						<strong>po</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>ta</strong>
						<strong>k</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong> radu &#382;eljezni&#269;ke postaje</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<em>3.</em>
		<em>5</em>
		<em>.</em>
		<em>4</em>
		<em>Moderator</em>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="185" valign="top">
					<p>
						Predstavnik
					</p>
				</td>
				<td width="400" valign="top">
					<p align="center">
						<strong>Boris Ad&#382;aip</strong>
						<strong></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Opis
					</p>
				</td>
				<td width="400" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>vl</strong>
						<strong>a</strong>
						<strong>st</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>do</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>r&#382;</strong>
						<strong>a</strong>
						<strong>ja</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>b</strong>
						<strong>a</strong>
						<strong>z</strong>
						<strong>u</strong>
						<strong>,</strong>
						<strong> </strong>
						<strong>do</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>an</strong>
						<strong>je</strong>
						<strong> </strong>
						<strong>no</strong>
						<strong>vi</strong>
						<strong>h</strong>
						<strong>
							putnika u bazu podataka i nadgledanja rada sustava
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Tip
					</p>
				</td>
				<td width="400" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>ap</strong>
						<strong>r</strong>
						<strong>ed</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>t</strong>
						<strong>e</strong>
						<strong>h</strong>
						<strong>n</strong>
						<strong>i&#269;</strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>ori&#353;t</strong>
						<strong>e</strong>
						<strong>nj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>ra</strong>
						<strong>&#269;u</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>la</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>int</strong>
						<strong>e</strong>
						<strong>rn</strong>
						<strong>e</strong>
						<strong>t</strong>
						<strong>a</strong>
						<strong>
							kao i znanje kori&#353;tenja baza podataka.
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Odgovornosti
					</p>
				</td>
				<td width="400" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>est</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>re</strong>
						<strong>c</strong>
						<strong>izno</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>v</strong>
						<strong>o</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong>h</strong>
						<strong>t</strong>
						<strong>jeve</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>usl</strong>
						<strong>u</strong>
						<strong>g</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>oj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>&#269;</strong>
						<strong>e</strong>
						<strong>k</strong>
						<strong>u</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>
							sustava. Dodavanje korisnika u sustav i
							a&#382;uriranje sadr&#382;aja-
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Kriteriji uspjeha
					</p>
				</td>
				<td width="400" valign="top">
					<p>
						<strong>Ja</strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>do</strong>
						<strong>br</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>o</strong>
						<strong>z</strong>
						<strong>na</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>s</strong>
						<strong>tava</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong>n</strong>
						<strong>st</strong>
						<strong>a</strong>
						<strong>nt</strong>
						<strong>no</strong>
						<strong>j</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong>m</strong>
						<strong>u</strong>
						<strong>ni</strong>
						<strong>k</strong>
						<strong>a</strong>
						<strong>c</strong>
						<strong>ij</strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>a</strong>
						<strong> administratorom</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Uklju&#269;enost u projekt
					</p>
				</td>
				<td width="400" valign="top">
					<p>
						<strong>D</strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>a&#382;</strong>
						<strong>u</strong>
						<strong>riranj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>a</strong>
						<strong>dr</strong>
						<strong>&#382;</strong>
						<strong>aj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>po</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>taka</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>b</strong>
						<strong>a</strong>
						<strong>z</strong>
						<strong>i</strong>
						<strong> podataka.</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		7
	</p>
</div>
<br clear="all"/>
<div>
	<p>
		<em>3.</em>
		<em>5</em>
		<em>.</em>
		<em>5</em>
		<em>Administrator</em>
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="185" valign="top">
					<p>
						Predstavnik
					</p>
				</td>
				<td width="382" valign="top">
					<p>
						Daniel Vasi&#263;
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Opis
					</p>
				</td>
				<td width="382" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>gle</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>ust</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong>&#353;a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>te</strong>
						<strong>h</strong>
						<strong>ni</strong>
						<strong>&#269;</strong>
						<strong>ki</strong>
						<strong>h</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>r</strong>
						<strong>o</strong>
						<strong>ble</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong>,</strong>
						<strong>
							programiranje samog sustava i implementacija
							sustava.
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Tip
					</p>
				</td>
				<td width="382" valign="top">
					<p>
						<strong>I</strong>
						<strong>m</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>n</strong>
						<strong>ap</strong>
						<strong>r</strong>
						<strong>ed</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>t</strong>
						<strong>e</strong>
						<strong>h</strong>
						<strong>n</strong>
						<strong>i&#269;</strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>ori&#353;t</strong>
						<strong>e</strong>
						<strong>nj</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>ra</strong>
						<strong>&#269;u</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong>la</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>int</strong>
						<strong>e</strong>
						<strong>rn</strong>
						<strong>e</strong>
						<strong>t</strong>
						<strong>a</strong>
						<strong>
							kao i znanje kori&#353;tenja baza podataka.
						</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Odgovornosti
					</p>
				</td>
				<td width="382" valign="top">
					<p>
						<strong>N</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>gle</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong>n</strong>
						<strong>j</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>a</strong>
						<strong>d</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>su</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>,</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>r&#382;</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>e</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>te</strong>
						<strong> </strong>
						<strong>r</strong>
						<strong>je&#353;</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>nj</strong>
						<strong>e</strong>
						<strong> tehni&#269;kih problema sustava.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Kriteriji uspjeha
					</p>
				</td>
				<td width="382" valign="top">
					<p>
						<strong>Ja</strong>
						<strong>k</strong>
						<strong>o</strong>
						<strong> </strong>
						<strong>do</strong>
						<strong>br</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>op</strong>
						<strong>t</strong>
						<strong>imizacija</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>st</strong>
						<strong>a</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>laniranje</strong>
						<strong> </strong>
						<strong>s</strong>
						<strong>u</strong>
						<strong>sta</strong>
						<strong>v</strong>
						<strong>a</strong>
						<strong>.</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="185" valign="top">
					<p>
						Uklju&#269;enost u projekt
					</p>
				</td>
				<td width="382" valign="top">
					<p>
						<strong>O</strong>
						<strong>s</strong>
						<strong>o</strong>
						<strong>b</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>o</strong>
						<strong>d</strong>
						<strong>g</strong>
						<strong>o</strong>
						<strong>v</strong>
						<strong>or</strong>
						<strong>n</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>z</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong>n</strong>
						<strong>o</strong>
						<strong>s</strong>
						<strong> </strong>
						<strong>k</strong>
						<strong>oris</strong>
						<strong>n</strong>
						<strong>ik</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>b</strong>
						<strong>a</strong>
						<strong>z</strong>
						<strong>u</strong>
						<strong> </strong>
						<strong>p</strong>
						<strong>od</strong>
						<strong>atk</strong>
						<strong>a</strong>
						<strong> </strong>
						<strong>i</strong>
						<strong> </strong>
						<strong>izrada</strong>
						<strong> samog sustava.</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<p>
		<strong>3.</strong>
		<strong>6</strong>
		<strong>Osnovne</strong>
		<strong>potrebe</strong>
		<strong>davatelja</strong>
		<strong>zahtjeva</strong>
		<strong>i</strong>
		<strong>krajnjih</strong>
		<strong>sudionika</strong>
	</p>
	<p>
		U suvremeno doba ve&#263;ina tvrtki svoje poslovanje nastoji
		modernizirati u smislu da olak&#353;aju potencijalnim kupcima i
		omogu&#263;e jednostavno i brzo obavljanje svojih potreba na sto
		lak&#353;i na&#269;in. Sve je vi&#353;e tvrtki koje svoje poslovanje
		&#382;ele preseliti na Internet i tako omogu&#263;iti dostupnost usluga
		koje nude od 0 do 24 bilo gdje na svijetu. Cilj ovog projekta je
		osigurati tvrtki &#8222;Katarina d.o.o. Mostar" mjesto gdje ce
		vr&#353;iti svoje poslovanje, tako&#273;er treba osigurati
		administraciju osoblju trgovine tako da na brz i jednostavan na&#269;in
		mogu dodavati najnoviji inventar i na taj na&#269;in prezentirati sve
		podatke. Potencijalni problemi prilikom implementacije ovog sustava je
		sama sigurnost budu&#263;i da se nalazi na internetu konstantno je
		izlo&#382;ena potencijalnim napadima, sustav mora biti konstantno
		dostupan i mora se nositi sa jako puno zahtjeva, osigurati bazu na
		na&#269;in da se pravilno autentificira korisnik prije sto mu se
		omogu&#263;i pristup, tre pravilno optimizirati sustav da su
		informacije koje se izla&#382;u dostupni na tra&#382;ilicama (Bing,
		Google)
	</p>
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td width="631" colspan="5" valign="top">
					<p>
						<strong>P</strong>
						<strong>o</strong>
						<strong>tr</strong>
						<strong>eb</strong>
						<strong>a</strong>
						<strong>Prioret</strong>
						<strong>Problemi</strong>
						<strong>Trenutno</strong>
						<strong>Predlo&#382;eno</strong>
						<strong>rje&#353;enje</strong>
						<strong>rje&#353;enje</strong>
					</p>
				</td>
			</tr>
			<tr>
				<td width="187" valign="top">
					<p>
						Sigurnost sustava
					</p>
				</td>
				<td width="60" valign="top">
					<p>
						Va&#382;no
					</p>
				</td>
				<td width="119" valign="top">
					<p>
						Unos malicioznih podataka od strane korisnika
					</p>
				</td>
				<td width="103" valign="top">
					<p>
						Filtriranje i provjeravanje podataka prije unosa u bazu
						podataka.
					</p>
				</td>
				<td width="162" valign="top">
					<p>
						Filtriranje i provjeravanje podataka prije unosa u bazu
						podataka.
					</p>
				</td>
			</tr>
			<tr>
				<td width="187" valign="top">
					<p>
						Dostupnost sustava
					</p>
				</td>
				<td width="60" valign="top">
					<p>
						Va&#382;no
					</p>
				</td>
				<td width="119" valign="top">
					<p>
						Sustav mora biti konstantno dostupan
					</p>
				</td>
				<td width="103" valign="top">
					<p>
						Testiranje i izrada sustava lokalno uz pomo&#263; XAMPP
						programskog paketa zatim zakup prostora n internetu
					</p>
				</td>
				<td width="162" valign="top">
					<p>
						Zakup prostora na internetu koji ce omogu&#263;iti
						skalabilnost projekta i koji &#263;e biti konstantno
						dostupan
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<br clear="all"/>
<div>

</div>
     	
      <p><a href="index.html">HOME</a> |  <a href="page.html">KONTAKT</a> |  <a href="contact.html">REZERVIRAJ KARTU</a></p>
    </div>
</div>

 </body>
</html>


