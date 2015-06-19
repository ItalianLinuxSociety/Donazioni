<?php
/*
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

<?php

require_once ('funzioni.php');
lugheader ('Donazioni');

list($amount, $quantity) = recap_donations('lightboard');

$now = time();
$closing = strtotime("2015-07-31");
$datediff = $now - $closing;
$days = floor($datediff/(60*60*24));

?>

<div class="container">
	<div class="row">
		<div class="twelve columns intro">
			<p>
				Ogni giorno promuoviamo l'importanza, tecnica e sociale, dell'accesso al codice sorgente delle applicazioni software, nonché la cultura della condivisione e la priorità di una scelta consapevole. Ma non basta.<br/>
				Il software libero non può essere solo promosso e divulgato, ma deve anche essere implementato. E per farlo nel migliore dei modi servono risorse, umane ed economiche.<br/>
				Sostieni anche tu il software libero: ogni donazione, anche da pochi euro, fa la differenza.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="eight columns">
			<h1>Progetto in Corso: LightBoard</h1>

			<p>
				LightBoard intende essere una evoluzione di python-whiteboard, applicazione di supporto per la WiiLD, la Lavagna Digitale costruita con il WiiMote ed alternativa alle costose LIM (<a href="http://wiildos.wikispaces.com/Lavagna+col+wiimote">qui maggiori dettagli</a>).
			</p>
			<p>
				Ottimizzato anche per i computer meno aggiornati o meno potenti, incluso il popolare ed economico Raspberry PI, ma allo stesso tempo aggiornato per i controller più recenti e precisi.
			</p>
			<p>
				Col tuo supporto, LightBoard potrà essere un efficace strumento per utilizzare una lavagna interattiva a basso costo fruibile da qualsiasi scuola (ed anche riproducibile a casa dagli studenti), compatta, reattiva e Linux-friendly.
			</p>

			<hr/>

			<h3>Obiettivi</h3>

			<div class="row">
				<div class="two columns">
					<p class="u-pull-right">3000 €</p>
				</div>
				<div class="ten columns">
					<ul>
						<li>porting di python-whiteboard</li>
						<li>driver di supporto per il controller WiiMote Plus</li>
						<li>nuova interfaccia utente</li>
						<li>pacchettizzazione, per agevolare l'installazione su sistemi esistenti</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="two columns">
					<p class="u-pull-right">4500 €</p>
				</div>
				<div class="ten columns">
					<ul>
						<li>gestione profili</li>
						<li>comportamento configurabile</li>
					</ul>
				</div>
			</div>

			<div style="clear: both"></div>

			<hr/>

			<h3>Startup</h3>

			<div class="row">
				<div class="twelve columns">
					<p>
						I soci di Italian Linux Society mettono a disposizione i primi 3000 euro della raccolta fondi, e ti invitano a partecipare per portare a termine tutti gli obiettivi previsti.
					</p>
					<p>
						Lo sviluppo inizierà nel mese di agosto; sottoscrivi <a href="http://www.ils.org/newsletter">la newsletter di Italian Linux Society</a> per futuri aggiornamenti, e per ricevere informazioni sulle prossime raccolte fondi.
					</p>
				</div>
			</div>

			<?php if($days <= 0): ?>
			<hr/>

			<h3>Dona adesso!</h3>

			<div class="row">
				<div class="six columns centered">
					<p>
						Con <strong>PayPal</strong><br/>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="8KDSG75FRQXV6">
							<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</p>
				</div>

				<div class="six columns centered">
					<p>
						Con un <strong>bonifico</strong>, sull'IBAN<br/>
						<strong class="mono">IT 74 G 02008 12609 000100129899</strong><br/>
						intestato a<br/>
						ILS ITALIAN LINUX SOCIETY<br/>
						specificando come causale<br/>
						"progetto lightboard"
					</p>
				</div>

				<div class="twelve columns">
					<p>
						<strong>Bonus</strong>: iscrivendoti oggi ad Italian Linux Society la tua quota di iscrizione andrà direttamente a sostegno di questo progetto e tu potrai godere di <a href="http://www.ils.org/iscrizione">tutti i benefici dei soci ILS</a>.
					</p>
				</div>
			</div>
			<?php endif ?>
		</div>

		<div class="four columns sums">
			<p>
				<b><?php echo $amount ?> €</b>
				<span>donati da <?php echo $quantity ?> persone</span>
			</p>
			<p>
				<b>3000 €</b>
				<span>fondo Italian Linux Society</span>
			</p>
			<p>
				<b><?php echo 3000 + $amount ?> €</b>
				<span>raccolti su 4500 €</span>
			</p>

			<?php if($days <= 0): ?>
			<p>
				<b><?php echo $days ?></b>
				<span>giorni alla chiusura della raccolta per questo progetto</span>
			</p>
			<?php else: ?>
			<p>
				La raccolta è stata chiusa per questo progetto; torna prossimamente per contribuire ad un nuovo obiettivo!
			</p>
			<?php endif ?>
		</div>
	</div>
</div>

<div style="clear: both; margin-bottom: 20px"></div>

<?php lugfooter (); ?>