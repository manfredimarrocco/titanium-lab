# TITANIUM · GRC Tools & Lab

Versione **0.2.4**, 12 ottobre 2026.

TITANIUM è un workspace dimostrativo per audit, con dati sintetici iniziali. Applicazione statica nel browser: nessun account, database, invio di dati o salvataggio cloud. File e cataloghi non vengono caricati su WordPress. Il codice della demo precedente rimane distinto dai workbook originali: nessun materiale cliente o VBA è incluso.

## Avvio e utilizzo

Aprire `wordpress/mm-grc-lab/app/index.html` con Edge, Chrome o Firefox. Il pacchetto standalone conserva la stessa struttura e si apre direttamente da file locale. Per visualizzare anche l’anteprima della pagina Lab aprire `preview/index.html` nella cartella di revisione. Nell’anteprima aperta da file la demo si avvia in una scheda autonoma, perché l’iframe isolato non può eseguire script locali; su HTTP/HTTPS è incorporata nella pagina.

L’audit sintetico illustra le funzioni. «Nuovo audit» crea requisiti senza giudizi. «Cataloghi» aggiunge riferimenti al perimetro; per NIS2 selezionare il profilo applicabile. «Requisiti & audit» gestisce esiti, evidenze, maturità, gap e azioni. «Report» genera un riepilogo o dettaglio stampabile: il PDF si salva dalla stampa del browser. Scaricare il lavoro JSON prima di chiudere; il reload ripristina la demo iniziale. JSON conserva perimetro, metadata, rilevazioni e registro; XLSX conserva i 25 campi dei requisiti, non lo storico.

## Importazione Excel

Usare `TITANIUM-template.xlsx`: fogli Audit/Guida, 25 colonne, menu di validazione e tre righe sintetiche da sostituire. XLSX/CSV: massimo 5 MB e 5.000 requisiti complessivi. Nessuna formula o macro; XLSX con date 1904 viene rifiutato. Date testuali `AAAA-MM-GG` consigliate. La chiave è Framework + Versione + Codice. L’anteprima distingue aggiunte e aggiornamenti; i campi presenti, anche vuoti, aggiornano la voce, quelli assenti vengono conservati. Un errore impedisce l’intera importazione. «Non applicabile» richiede una motivazione. Le copie ufficiali possono richiedere associazione delle colonne e separazione dei requisiti prima dell’importazione: non è un lettore universale di formati editoriali.

## Metodo

Completamento: tutti gli esiti assegnati, NA compresa, sul totale. Indice sugli esiti valutati: (Conforme + 0,5 × Parzialmente conforme) / (Conforme + Parzialmente conforme + Non conforme); NA e Da valutare esclusi. L’indice legacy è mostrato separatamente. La maturità 0–5 è un criterio locale, non un Tier NIST. Il triage considera severità, scadenza, responsabile ed evidenze e rende visibili i contributi. Le rilevazioni storiche vengono registrate esplicitamente per lo stesso perimetro. Chiudere un’azione non modifica il giudizio. ID evidenza uguali collegano riferimenti senza attribuire equivalenza fra requisiti. Nessun risultato costituisce certificazione o valutazione automatica della conformità.

## Installazione WordPress

1. Verificare il tema, i plugin, le pagine e gli shortcode correnti. Usare un template pagina che esegua il contenuto WordPress.
2. Installare `mm-grc-lab-0.2.4.zip`. Il plugin non crea pagine, non scrive impostazioni, non aggiunge endpoint e non cambia il tema. Carica i propri asset soltanto sulle pagine singole contenenti `[mm_grc_lab]`.
3. Creare una pagina **bozza** dal titolo `Lab`, slug `lab`, senza genitore, commenti chiusi, con un solo blocco Shortcode: `[mm_grc_lab]`. La demo è incorporata nella pagina e raggiungibile con `#titanium`.
4. Impostare titolo SEO `Lab — TITANIUM, strumenti GRC dimostrativi` e descrizione `Esplora TITANIUM: demo GRC nel browser con dati sintetici, cataloghi di requisiti, grafici, import Excel e report. Nessun account o salvataggio cloud.` attraverso Yoast già presente. Canonical previsto `/lab/`. Nessun codice Person, canonical o structured data duplicato dal plugin.
5. Verificare anteprima WordPress, desktop/mobile, shortcode, iframe, import/export, stampa, fonti e download. I controlli locali non sostituiscono le prove nell’installazione di destinazione.
6. Pubblicare soltanto dopo autorizzazione. Aggiungere un collegamento da Progetti mediante una modifica separata e minima, verificando anche la resa; la navigazione globale non viene alterata dal pacchetto. Non occorre un sito Cloudflare o GitHub Pages.

La demo statica è `noindex,nofollow`; la pagina Lab resta l’URL editoriale principale. L’iframe usa un’origine isolata tramite sandbox, con script, download, stampa e apertura delle fonti consentiti. La demo blocca le connessioni tramite CSP. Il sito WordPress può avere i propri strumenti analytics: la promessa di assenza di invio riguarda i dati dell’applicativo, non le richieste della pagina pubblica.

## Integrazione GitHub

Il repository applicativo è separato dal repository del profilo. Non aggiungere materiali personali, dati di audit o contenuti cliente ai sorgenti.

Distribuire questa cartella come sorgente e associare alla versione `v0.2.4` i pacchetti plugin ZIP, standalone ZIP e template XLSX. WordPress serve la demo dalla propria installazione; GitHub serve codice, versioni e download. Nessun servizio automatico o token runtime necessario.

Configurare gli attributi `repository` e `download` dello shortcode (oppure i filtri `mm_grc_lab_repository_url` e `mm_grc_lab_download_url`) solo con URL HTTPS verificati del repository e della versione scaricabile. Il plugin ammette esclusivamente host `github.com`; senza configurazione i link sono nascosti. Gli aggiornamenti del plugin sono manuali e vanno provati prima della distribuzione.

## Fonti e diritti

Leggere `THIRD-PARTY-NOTICES.md` per fonti, versioni, attribuzione e copertura effettiva. ISO, CIS e FNCDP non contengono testi normativi completi nel pacchetto pubblico candidato. Materiali importati dall’utilizzatore rimangono locali e non devono essere aggiunti ai sorgenti del repository. Licenza MIT per il solo codice originale; le condizioni dei contenuti di terzi rimangono distinte e sono descritte negli avvisi.

## Verifiche

La release 0.2.0 ha superato le prove funzionali locali su Edge (cataloghi, importazione del vero template, duplicati e aggiornamenti atomici, XLSX/JSON, NA, perimetro, azioni, snapshot e stampa). La candidata 0.2.4 aggiunge l’integrazione e le protezioni documentate nel CHANGELOG; validazione locale e relativo limite WordPress sono registrati nel master operativo condiviso. Non include telemetria, build remota, dipendenze CDN o servizi a pagamento.
