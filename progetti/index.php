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

<?php

require_once ('../funzioni.php');
lugheader ('Progetti Passati');

$projects = json_decode(file_get_contents('../projects.json'));
$now = time();

?>

<div class="container main-contents">
	<div class="row">
		<div class="col">
			<br>
			<div class="alert alert-info">
				<p>
					Sono qui elencati i progetti che sono stati ospitati su donazioni.linux.it, con le relative cifre, numeri e riferimenti.
				</p>
			</div>
		</div>
	</div>

	<?php foreach($projects as $project): ?>

		<?php

		$closing = strtotime($project->closing);
		$datediff = $now - $closing;
		$days = floor($datediff/(60*60*24));
		if ($days < 0)
			continue;

		?>

		<hr>

		<div class="row">
			<div class="col">
				<h2>
					<?php echo $project->name ?><br>
					<small>chiuso il <?php echo date('d/m/Y', strtotime($project->closing)) ?></small>
				</h2>
				<div class="status"><?php echo $project->status ?></div>
			</div>
			<?php do_sums($project, $days) ?>
		</div>

	<?php endforeach ?>
</div>

<div style="clear: both; margin-bottom: 20px"></div>

<?php lugfooter (); ?>

