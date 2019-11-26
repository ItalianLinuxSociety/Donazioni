<?php
/*
  Copyright (C) 2010-2019  Italian Linux Society - http://www.linux.it

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>

<?php function lugheader ($title, $extracss = null, $extrajs = null) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="italian" />
	<meta name="robots" content="noarchive" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://www.linux.it/shared/index.php?f=bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="https://www.linux.it/shared/index.php?f=main.css" rel="stylesheet" type="text/css" />

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

<body>

<div id="header">
	<img src="/immagini/logo.png" alt="" />
	<div id="maintitle">Donazioni</div>
	<div id="payoff">La libertà non ha prezzo</div>

	<div class="menu">
		<a class="generalink" href="/">Home</a>
		<a class="generalink" href="/progetti/">Progetti Passati</a>
		<a class="generalink" href="/contatti/">Contatti</a>

		<p class="social mt-2">
			<a href="https://twitter.com/ItaLinuxSociety"><img src="https://www.linux.it/shared/index.php?f=immagini/twitter.png"></a>
			<a href="https://www.facebook.com/ItaLinuxSociety/"><img src="https://www.linux.it/shared/index.php?f=immagini/facebook.png"></a>
			<a href="https://github.com/ItalianLinuxSociety/Donazioni"><img src="https://www.linux.it/shared/index.php?f=immagini/github.png"></a>
		</p>
	</div>
</div>

<?php
}

function lugfooter () {
?>

<div id="ils_footer" class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<span style="text-align: center; display: block">
					<a href="http://www.gnu.org/licenses/agpl-3.0-standalone.html" rel="license">
						<img src="https://www.linux.it/shared/index.php?f=immagini/agpl3.svg" style="border-width:0" alt="AGPLv3 License">
					</a>

					<a href="http://creativecommons.org/publicdomain/zero/1.0/deed.en_US" rel="license">
						<img src="https://www.linux.it/shared/index.php?f=immagini/cczero.png" style="border-width:0" alt="Creative Commons License">
					</a>
				</span>
			</div>

			<div class="col-md-3">
				<h2>RESTA AGGIORNATO!</h2>
				<script type="text/javascript" src="https://www.linux.it/external/widgetnewsletter.js"></script>
				<div id="widgetnewsletter"></div>
			</div>

			<div class="col-md-3">
				<h2>Amici</h2>
				<p style="text-align: center">
					<a href="http://www.ils.org/info#aderenti">
						<img src="http://www.ils.org/sites/ils.org/files/associazioni/getrand.php" border="0" /><br />
						Scopri tutte le associazioni che hanno aderito a ILS.
					</a>
				</p>
			</div>

			<div class="col-md-3">
				<h2>Network</h2>
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
	$target = strtolower($target);

	if (file_exists($filename) == true) {
		$rows = file($filename);

		foreach ($rows as $row) {
			$row = trim($row);
			list($date, $person, $amount, $scope) = explode('|', $row);
			$scope = strtolower($scope);

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

	<div class="col-4 text-right sums">
		<p>
			<b><?php echo $amount ?> €</b>
			<span>donati da <?php echo $quantity ?> persone</span>
		</p>

		<?php if($ils_amount == 'match'): ?>
		<p>
			<b><?php echo (($amount * 2) > $target ? $target / 2 : $amount) ?> €</b>
			<span>fondo Italian Linux Society</span>
		</p>
		<?php elseif($ils_amount != 0): ?>
		<p>
			<b><?php echo $ils_amount ?> €</b>
			<span>fondo Italian Linux Society</span>
		</p>
		<?php endif ?>

		<p>
			<b><?php echo ($ils_amount == 'match') ? ($amount * 2) : ($ils_amount + $amount) ?> €</b>
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
