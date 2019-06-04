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

$projects = json_decode(file_get_contents('projects.json'));
$project = $projects[0];

$now = time();
$closing = strtotime($project->closing);
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

	<?php if ($days < 0):
		list($amount, $quantity) = recap_donations($project->tag);
		$target = $project->target;
		$ils_amount = $project->ils_fund;

		?>

		<div class="row">
			<div class="eight columns">
				<h1>Progetto in Corso: <?php echo $project->name ?></h1>

				<?php if(($ils_amount == 'match' && $amount * 2 >= $target) || (($ils_amount + $amount) >= $target)): ?>
				<div class="closed">
					<img src="/immagini/flag.png">
					<p>
						Abbiamo raggiunto l'obiettivo di <?php echo $target ?> euro! La raccolta resterà aperta fino a fine mese, ma ricordate che prossimamente altre campagne analoghe verranno annunciate: se non avete contribuito adesso potrete comunque farlo presto! Restate aggiornati per mezzo della <a href="http://www.ils.org/newsletter">newsletter di Italian Linux Society</a>.
					</p>
					<p class="clear_spacer"></p>
				</div>
				<?php endif ?>

				<p>
					<?php echo str_replace("\n", "</p><p>", $project->descr) ?>
				</p>

				<?php if(!empty($project->aims)): ?>
				<hr/>

				<h3>Obiettivi</h3>

				<?php foreach($project->aims as $aim): ?>
				<div class="row">
					<div class="two columns">
						<p class="u-pull-right"><?php echo $aim->amount ?> €</p>
					</div>
					<div class="ten columns">
						<ul>
							<?php foreach($aim->goals as $goal): ?>
							<li><?php echo $goal ?></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
				<?php endforeach ?>
				<?php endif ?>

				<div style="clear: both"></div>

				<hr/>

				<?php if($ils_amount == 'match'): ?>
				<p>
					<strong>I soci di Italian Linux Society raddoppiano le donazioni ricevute</strong> (fino ad un massimo di <?php echo $target / 2 ?> euro): più doni tu, più dona Italian Linux Society!
				</p>
				<?php elseif($ils_amount != 0): ?>
				<p>
					I soci di Italian Linux Society mettono a disposizione i primi <?php echo $ils_amount ?> euro della raccolta fondi, e ti invitano a partecipare per portare a termine tutti gli obiettivi previsti.
				</p>
				<?php endif ?>

				<p>
					Tutto il denaro raccolto con questa campagna sarà destinato al progetto, indipendentemente dalla soglia raggiunta.
				</p>
				<p>
					Sottoscrivi <a href="http://www.ils.org/newsletter">la newsletter di Italian Linux Society</a> per futuri aggiornamenti, e per ricevere informazioni sulle prossime raccolte fondi.
				</p>

				<?php if($days <= 0): ?>
				<hr/>

				<h3>Dona adesso!</h3>

				<div class="row">
					<div class="six columns centered">
						<p>
							Con <strong>PayPal</strong><br/>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="<?php echo $project->paypal ?>">
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
							"progetto <?php echo $project->tag ?>"
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
				<?php do_sums($project, $days) ?>
			</div>
		</div>
	<?php else: ?>
		<div class="container">
			<div class="row">
				<div class="twelve columns">
					<p>
						Non sono al momento attive campagne di raccolta fondi.
					</p>
					<p>
						<a href="/progetti">Consulta qui i progetti passati</a>, o sottoscrivi <a href="http://www.ils.org/newsletter">la newsletter di Italian Linux Society</a> per futuri aggiornamenti e per ricevere informazioni sulle prossime iniziative.
					</p>
				</div>
			</div>
		</div>
	<?php endif ?>
</div>

<div style="clear: both; margin-bottom: 20px"></div>

<?php lugfooter (); ?>
