#!/bin/bash

# questo è lo script che si occupa dell'aggiornamento di http://donazioni.linux.it
# pigliando il relativo branch da GitHub.
# Bada che questo script non viene eseguito in automatico, sicché eventuali
# modifiche vanno segnalate a Fabio Invernizzi <fabulus@linux.it>

PATH_SITO='/var/www/donazioni'

fallito_aggiornamento() {
	# segnalo via mail problemi sull'aggiornamento, se possibile
	[ -e /usr/bin/mail ] && echo "Problema aggiornamento git-pull donazioni.linux.it" | /usr/bin/mail -s "donazioni.linux.it: errore git-pull" webmaster@linux.it
	# sputo qualcosa anche in output, contando che venga intercettato da cron.
	echo "donazioni.linux.it: errore git-pull"
	exit
}

cd $PATH_SITO

su -c "/usr/bin/git pull -q git://github.com/ItalianLinuxSociety/Donazioni.git master" www-data || fallito_aggiornamento
