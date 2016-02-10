<?php
/*Codice della mappa dei LUG italiani
  Copyright (C) 2010-2015  Italian Linux Society - http://www.linux.it

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.*/
?>

<?php function lugheader ($title, $extracss = null, $extrajs = null) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="italian" />
	<meta name="robots" content="noarchive" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans|Nobile|Nobile:b" />
	<link href="/css/main.css" rel="stylesheet" type="text/css" />

	<meta name="dcterms.creator" content="Italian Linux Society" />
	<meta name="dcterms.type" content="Text" />
	<link rel="publisher" href="http://www.ils.org/" />

	<meta name="twitter:title" content="La Libertà non ha Prezzo" />
	<meta name="twitter:creator" content="@ItaLinuxSociety" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" content="http://donazioni.linux.it/" />
	<meta name="twitter:image" content="http://donazioni.linux.it/immagini/tw.png" />

	<meta property="og:site_name" content="Donazioni" />
	<meta property="og:title" content="Donazioni" />
	<meta property="og:url" content="http://donazioni.linux.it/" />
	<meta property="og:image" content="http://donazioni.linux.it/immagini/fb.png" />
	<meta property="og:type" content="website" />
	<meta property="og:country-name" content="Italy" />
	<meta property="og:email" content="webmaster@linux.it" />
	<meta property="og:locale" content="it_IT" />
	<meta property="og:description" content="La Libertà non ha Prezzo" />

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>

	<?php

	if ($extracss != null)
		foreach ($extracss as $e) {
			?>
			<link href="<?php echo $e; ?>" rel="stylesheet" type="text/css" />
			<?php
		}

	if ($extrajs != null)
		foreach ($extrajs as $e) {
			?>
			<script type="text/javascript" src="<?php echo $e; ?>"></script>
			<?php
		}

	?>

	<title><?php echo $title; ?></title>
</head>
<!-- <a href="http://lugmap.linux.it/css/contact.php">select</a> -->
<body>

<div id="header">
	<img src="/immagini/logo.png" alt="" />
	<div id="maintitle">Donazioni</div>
	<div id="payoff">La libertà non ha prezzo</div>

	<div class="menu">
		<a class="generalink" href="/">Home</a>
		<a class="generalink" href="/progetti/">Progetti Passati</a>
		<a class="generalink" href="/contatti/">Contatti</a>

		<p class="social">
			<!-- Icone prese da http://kooc.co.uk/need-some-up-to-date-social-media-icons -->
			<a href="http://twitter.com/#!/ItaLinuxSociety"><img src="http://lugmap.linux.it/immagini/twitter.png"></a>
			<a href="https://github.com/ItalianLinuxSociety/Donazioni/commits/master.atom"><img src="http://lugmap.linux.it/immagini/rss.png"></a>
			<a href="https://github.com/ItalianLinuxSociety/Donazioni"><img src="http://lugmap.linux.it/immagini/github.png"></a>
		</p>
	</div>
</div>

<?php
}

function lugfooter () {
?>

<div id="ils_footer">
	<div class="contents">
		<div class="block">
			<span style="text-align: center; display: block">
				<a href="http://www.gnu.org/licenses/agpl-3.0-standalone.html" rel="license">
					<img src="http://lugmap.linux.it/immagini/agpl3.svg" style="border-width:0" alt="AGPLv3 License">
				</a>

				<br />

				<a href="http://creativecommons.org/publicdomain/zero/1.0/deed.en_US" rel="license">
					<img src="http://lugmap.linux.it/immagini/cczero.png" style="border-width:0" alt="Creative Commons License">
				</a>
			</span>
		</div>

		<div class="block">
			<h2>RESTA AGGIORNATO!</h2>
			<div class="content">
				<div class="newsletter_subscribe">
					<p>
						Iscriviti alla newsletter per aggiornamenti periodici sul software libero in Italia!
					</p>

					<p>
						Specificando la tua provincia di residenza riceverai anche gli annunci sulle <a href="http://www.linux.it/eventi">attività svolte dai LUG e dai gruppi amici</a> nella tua zona.
					</p>

					<form class="webform-client-form" action="http://www.linux.it/subscribe.php" method="get">
						<input type="email" class="form-text" name="name" placeholder="Indirizzo Mail" />
						<p style="display: none">
							<input type="text" name="mail" />
						</p>

						<?php prov_select ('form-select'); ?>

						<input type="submit" class="form-submit" value="Iscriviti" />
					</form>
				</div>
			</div>
		</div>

		<div class="block">
			<h2>Amici</h2>
			<div class="content">
				<p style="text-align: center">
					<a href="http://www.ils.org/info#aderenti">
						<img src="http://www.ils.org/sites/ils.org/files/associazioni/getrand.php" border="0" /><br />
						Scopri tutte le associazioni che hanno aderito a ILS.
					</a>
				</p>
			</div>
		</div>

		<div class="block">
			<h2>Network</h2>
			<div class="content">
				<script type="text/javaScript" src="http://www.linux.it/external/widgetils.php?referrer=donazioni"></script>
				<div id="widgetils"></div>
			</div>
		</div>
	</div>

	<div style="clear: both"></div>
</div>

<!-- Piwik -->
<script type="text/javascript">
	var _paq = _paq || [];
	_paq.push(['disableCookies']);
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u="//pergamena.lugbs.linux.it/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', 20]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	})();
</script>
<noscript><p><img src="//pergamena.lugbs.linux.it/piwik.php?idsite=20" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>

<?php
}

function read_donations_file($filename, $target) {
	$total_amount = 0;
	$total_quantity = 0;

	if (file_exists($filename) == true) {
		$rows = file($filename);

		foreach ($rows as $row) {
			$row = trim($row);
			list($date, $person, $amount, $scope) = explode('|', $row);

			if (strpos($scope, $target) !== false) {
				$total_amount += round($amount);
				$total_quantity += 1;
			}
		}
	}

	return array($total_amount, $total_quantity);
}

function recap_donations($target) {
	list($pp_amount, $pp_quantity) = read_donations_file($_SERVER['DOCUMENT_ROOT'] . '/data/summary.txt', $target);
	list($ma_amount, $ma_quantity) = read_donations_file($_SERVER['DOCUMENT_ROOT'] . '/data/manual.txt', $target);
	return array($pp_amount + $ma_amount, $pp_quantity + $ma_quantity);
}

function do_sums($project, $days) {
	list($amount, $quantity) = recap_donations($project->tag);
	$target = $project->target;
	$ils_amount = $project->ils_fund;

	?>

	<div class="sums">
		<p>
			<b><?php echo $amount ?> €</b>
			<span>donati da <?php echo $quantity ?> persone</span>
		</p>

		<?php if($ils_amount != 0): ?>
		<p>
			<b><?php echo $ils_amount ?> €</b>
			<span>fondo Italian Linux Society</span>
		</p>
		<?php endif ?>

		<p>
			<b><?php echo $ils_amount + $amount ?> €</b>
			<span>raccolti su <?php echo $target ?> €</span>
		</p>

		<?php if($days <= 0): ?>
		<p>
			<b><?php echo $days ?></b>
			<span>giorni alla chiusura della raccolta per questo progetto</span>
		</p>
		<?php endif ?>
	</div>

	<?php
}

function prov_select ($class) {
	?>

	<select class="<?php echo $class ?>" name="prov">
		<option value="-1" selected="selected">Seleziona una Provincia</option>
		<option value="AG">Agrigento</option>
		<option value="AL">Alessandria</option>
		<option value="AN">Ancona</option>
		<option value="AO">Aosta</option>
		<option value="AR">Arezzo</option>
		<option value="AP">Ascoli Piceno</option>
		<option value="AT">Asti</option>
		<option value="AV">Avellino</option>
		<option value="BA">Bari</option>
		<option value="BT">Barletta-Andria-Trani</option>
		<option value="BL">Belluno</option>
		<option value="BN">Benevento</option>
		<option value="BG">Bergamo</option>
		<option value="BI">Biella</option>
		<option value="BO">Bologna</option>
		<option value="BZ">Bolzano</option>
		<option value="BS">Brescia</option>
		<option value="BR">Brindisi</option>
		<option value="CA">Cagliari</option>
		<option value="CL">Caltanissetta</option>
		<option value="CB">Campobasso</option>
		<option value="CI">Carbonia-Iglesias</option>
		<option value="CE">Caserta</option>
		<option value="CT">Catania</option>
		<option value="CZ">Catanzaro</option>
		<option value="CH">Chieti</option>
		<option value="CO">Como</option>
		<option value="CS">Cosenza</option>
		<option value="CR">Cremona</option>
		<option value="KR">Crotone</option>
		<option value="CN">Cuneo</option>
		<option value="EN">Enna</option>
		<option value="FM">Fermo</option>
		<option value="FE">Ferrara</option>
		<option value="FI">Firenze</option>
		<option value="FG">Foggia</option>
		<option value="FC">Forl&igrave;-Cesena</option>
		<option value="FR">Frosinone</option>
		<option value="GE">Genova</option>
		<option value="GO">Gorizia</option>
		<option value="GR">Grosseto</option>
		<option value="IM">Imperia</option>
		<option value="IS">Isernia</option>
		<option value="SP">La Spezia</option>
		<option value="AQ">L'Aquila</option>
		<option value="LT">Latina</option>
		<option value="LE">Lecce</option>
		<option value="LC">Lecco</option>
		<option value="LI">Livorno</option>
		<option value="LO">Lodi</option>
		<option value="LU">Lucca</option>
		<option value="MC">Macerata</option>
		<option value="MN">Mantova</option>
		<option value="MS">Massa-Carrara</option>
		<option value="MT">Matera</option>
		<option value="ME">Messina</option>
		<option value="MI">Milano</option>
		<option value="MO">Modena</option>
		<option value="MB">Monza e della Brianza</option>
		<option value="NA">Napoli</option>
		<option value="NO">Novara</option>
		<option value="NU">Nuoro</option>
		<option value="OT">Olbia-Tempio</option>
		<option value="OR">Oristano</option>
		<option value="PD">Padova</option>
		<option value="PA">Palermo</option>
		<option value="PR">Parma</option>
		<option value="PV">Pavia</option>
		<option value="PG">Perugia</option>
		<option value="PU">Pesaro e Urbino</option>
		<option value="PE">Pescara</option>
		<option value="PC">Piacenza</option>
		<option value="PI">Pisa</option>
		<option value="PT">Pistoia</option>
		<option value="PN">Pordenone</option>
		<option value="PZ">Potenza</option>
		<option value="PO">Prato</option>
		<option value="RG">Ragusa</option>
		<option value="RA">Ravenna</option>
		<option value="RC">Reggio Calabria</option>
		<option value="RE">Reggio Emilia</option>
		<option value="RI">Rieti</option>
		<option value="RN">Rimini</option>
		<option value="RM">Roma</option>
		<option value="RO">Rovigo</option>
		<option value="SA">Salerno</option>
		<option value="VS">Medio Campidano</option>
		<option value="SS">Sassari</option>
		<option value="SV">Savona</option>
		<option value="SI">Siena</option>
		<option value="SR">Siracusa</option>
		<option value="SO">Sondrio</option>
		<option value="TA">Taranto</option>
		<option value="TE">Teramo</option>
		<option value="TR">Terni</option>
		<option value="TO">Torino</option>
		<option value="OG">Ogliastra</option>
		<option value="TP">Trapani</option>
		<option value="TN">Trento</option>
		<option value="TV">Treviso</option>
		<option value="TS">Trieste</option>
		<option value="UD">Udine</option>
		<option value="VA">Varese</option>
		<option value="VE">Venezia</option>
		<option value="VB">Verbano-Cusio-Ossola</option>
		<option value="VC">Vercelli</option>
		<option value="VR">Verona</option>
		<option value="VV">Vibo Valentia</option>
		<option value="VI">Vicenza</option>
		<option value="VT">Viterbo</option>
	</select>

	<?php
}

?>
