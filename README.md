/vendor: tutte le librerie che ci forniscono gli sviluppatori di Laravel che non dobbiamo scrivere

/composer.json: è il file che contiene le dipendenze (php) di cui il progetto ha bisogno per funzionare

/composer.lock: elenca tutte le dipendenze e le versioni esatte che sono state scaricate e installate nel progetto

.env: è il file di configurazione di laravel. viene usato per impostare alcune varibili che ci consentono di usare servizi esterni, oppure configurare variabili interne all'applicazione, ecc...N.B. non viene pushato

.env.example: viene pushato


artisan: interfaccia a riga di comando inclusa con laravel per impartire comandi al progetto

/app: qui ci sono cartelle e file principali dell'applicazione. I file che contengono la logica. I Models.

/database: ci sono tutti i file per gestire il database

/lang : è la cartella che contiene i file di lingua per la localizzazione

/public : è la document root -> posso vedere dal browser solo quello che sta qui dentro

/resources: è la cartella che contiene i file di vista, la parte visuale, il vostro html, js, css


/bootstrap : è una cartella che contiene il file app.php: il file di boostrap dell'applicazione

/storage: contiene i file temporanei dell'applicazione: file di log, immagini, pdf, audio, video ecc...

/tests: cartella per test automatizzati

/routes: cartella delle rotte

## Come si avvia il server per un progetto Laravel

php artisan serve


public/index.php è il punto di ingresso di un' applicazione Laravel. Questo file si occupa di gestire le richieste HTTP,
le trasforma in un oggetto


## Errori tipici

View [homefake] not found.: non trovo il file che corrisponde a quella vista