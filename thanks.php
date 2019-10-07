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

require_once ('read_paypal.php');
require_once ('funzioni.php');
lugheader ('Donazioni');

?>

<div class="container main-contents">
	<div class="row">
		<div class="col intro">
			<p>
				Grazie per la tua donazione!
			</p>
			<p>
				Tieniti aggiornato, su questo o su altri progetti futuri, sottoscrivendo la <a href="http://www.ils.org/newsletter">newsletter di Italian Linux Society</a> o seguendoci su <a href="https://twitter.com/italinuxsociety">Twitter</a> o <a href="https://www.facebook.com/italinuxsociety">Facebook</a>.
			</p>
			<p>
				E condividi questo sito presso amici e conoscenti affinché altri possano donare anche pochi euro per migliorare, con l'aiuto di tutti, il software di tutti.
			</p>

			<p style="text-align: center">
				<a href="https://twitter.com/share?url=http%3A%2F%2Fdonazioni.linux.it%2F&amp;text=Con+l%27aiuto+di+tutti%2C+facciamo+il+software+di+tutti.+Io+ho+contribuito%2C+e+tu%3F" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" alt="Share on Twitter"><img src="https://www.linux.it/shared/index.php?f=immagini/twitter.png"></a>
				<a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdonazioni.linux.it%2F" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" alt="Share on Facebook"><img src="https://www.linux.it/shared/index.php?f=immagini/facebook.png"></a>
			</p>
		</div>
	</div>


	<hr>

	<div class="row">
		<div class="col text-center">
			<a href="/">Torna alla homepage</a>
		</div>
	</div>
</div>

<div style="clear: both; margin-bottom: 20px"></div>

<?php lugfooter (); ?>

