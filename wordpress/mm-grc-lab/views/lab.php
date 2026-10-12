<?php if (!defined('ABSPATH')) { exit; } ?>
<div class="mm-lab">
  <section class="mm-lab-hero" aria-labelledby="mm-lab-title">
    <div class="mm-lab-intro">
      <p class="mm-lab-kicker"><span aria-hidden="true"></span> GRC Tools &amp; Lab</p>
      <h2 id="mm-lab-title">Dai requisiti<br>alle <em>decisioni.</em></h2>
      <p class="mm-lab-lead">TITANIUM è il laboratorio per esplorare un audit: scegli il perimetro, valuta le evidenze e trasforma i gap in azioni verificabili.</p>
      <div class="mm-lab-buttons"><a class="mm-lab-button mm-lab-button-primary" href="#titanium" data-mm-launch>Prova TITANIUM <span aria-hidden="true">↗</span></a><a class="mm-lab-button mm-lab-button-quiet" href="<?php echo esc_url($template_url); ?>" download>Template Excel <span aria-hidden="true">↓</span></a></div>
      <p class="mm-lab-caption">Demo interattiva · dati sintetici · nessun account</p>
    </div>
    <div class="mm-lab-map" aria-label="Il percorso di un audit: perimetro, valutazioni, azioni, report">
      <div class="mm-lab-map-head"><span>TITANIUM</span><span class="mm-lab-map-chip">Audit workspace</span></div>
      <div class="mm-lab-orbit" aria-hidden="true"><svg viewBox="0 0 280 250"><defs><linearGradient id="mm-lab-grad" x1="0" y1="0" x2="1" y2="1"><stop stop-color="#0da8a1"/><stop offset="1" stop-color="#dcae62"/></linearGradient></defs><circle cx="140" cy="125" r="92" fill="none" stroke="#fff" stroke-opacity=".08" stroke-width="1"/><circle cx="140" cy="125" r="73" fill="none" stroke="#fff" stroke-opacity=".07" stroke-width="17"/><circle cx="140" cy="125" r="73" fill="none" stroke="url(#mm-lab-grad)" stroke-width="17" stroke-dasharray="328 131" stroke-linecap="round" transform="rotate(-90 140 125)"/><path d="M111 138v-25m19 25V99m20 39v-18m19 18V109" stroke="#effbf9" stroke-width="7" stroke-linecap="round"/><circle cx="232" cy="125" r="5" fill="#dcae62"/><circle cx="140" cy="33" r="5" fill="#14aaa3"/><circle cx="48" cy="125" r="5" fill="#14aaa3"/></svg></div>
      <ol class="mm-lab-stages"><li><b>01</b> Perimetro</li><li><b>02</b> Valutazioni</li><li><b>03</b> Azioni</li><li><b>04</b> Report</li></ol>
      <p>Un percorso di lavoro, con criteri di calcolo espliciti.</p>
    </div>
  </section>

  <section class="mm-lab-editorial" aria-labelledby="mm-lab-method">
    <div><p class="mm-lab-eyebrow">Il metodo</p><h2 id="mm-lab-method">Un requisito.<br>Una valutazione tracciabile.</h2></div>
    <div><p>Dal catalogo al report: ogni voce mantiene framework, versione e fonte. Evidenze, responsabili e scadenze aiutano a leggere il lavoro svolto e ciò che resta aperto.</p><p>I grafici mostrano esiti, maturità, priorità operative e avanzamento. I giudizi restano manuali: una percentuale non certifica la conformità.</p></div>
  </section>

  <section class="mm-lab-demo" id="titanium" aria-labelledby="mm-lab-demo-title">
    <div class="mm-lab-section-head"><div><p class="mm-lab-eyebrow">01 / Applicativo disponibile</p><h2 id="mm-lab-demo-title">TITANIUM <span>v0.2.5 · demo</span></h2></div><div class="mm-lab-demo-tools"><a href="<?php echo esc_url($app_url); ?>" target="_blank" rel="noopener noreferrer">Apri in una scheda ↗</a><button type="button" data-mm-expand hidden>Espandi demo</button></div></div>
    <p class="mm-lab-demo-description">Prova l’audit sintetico oppure avvia un nuovo audit senza giudizi. Importa il template Excel, consulta i grafici e genera un report stampabile.</p>
    <div class="mm-lab-workspace" data-mm-workspace>
      <div class="mm-lab-launcher" data-mm-launcher><span class="mm-lab-launch-icon" aria-hidden="true">T</span><h3>Il tuo spazio di audit</h3><p>La demo lavora nel browser. I dati importati non vengono inviati a servizi esterni; per conservarli, scarica il file di lavoro JSON prima di chiudere.</p><button type="button" class="mm-lab-button mm-lab-button-primary" data-mm-launch>Avvia la demo <span aria-hidden="true">→</span></button><noscript><p>Per usare TITANIUM attiva JavaScript e <a href="<?php echo esc_url($app_url); ?>">apri l’applicativo</a>.</p></noscript></div>
      <iframe data-mm-frame data-src="<?php echo esc_url($app_url); ?>" title="TITANIUM — demo interattiva con dati sintetici" sandbox="allow-scripts allow-downloads allow-modals allow-popups allow-popups-to-escape-sandbox" referrerpolicy="no-referrer" hidden></iframe>
    </div>
    <p class="mm-lab-footnote">Nessun salvataggio automatico. Chiudere o ricaricare la demo reimposta il lavoro. Le evidenze sono riferimenti testuali: TITANIUM non carica allegati sul sito.</p>
  </section>

  <details class="mm-lab-details"><summary>Cataloghi, fonti e copertura <span aria-hidden="true">+</span></summary><div class="mm-lab-detail-body"><p>Le versioni incluse sono fotografate al 12 ottobre 2026. Non sono sincronizzate automaticamente con le fonti.</p><div class="mm-lab-table-scroll"><table><caption>Contenuti effettivamente inclusi nel pacchetto</caption><thead><tr><th>Riferimento</th><th>Copertura</th></tr></thead><tbody>
    <tr><th><a href="https://www.acn.gov.it/portale/nis/modalita-specifiche-base" target="_blank" rel="noopener noreferrer">NIS2 · ACN 379907/2025</a></th><td>87 requisiti importanti oppure 116 essenziali. Misure di sicurezza; incidenti significativi esclusi.</td></tr>
    <tr><th><a href="https://www.nist.gov/cyberframework" target="_blank" rel="noopener noreferrer">NIST CSF 2.0</a></th><td>106 sottocategorie attive del Core, testo ufficiale in inglese.</td></tr>
    <tr><th><a href="https://csrc.nist.gov/projects/risk-management/sp800-53-controls/release-search" target="_blank" rel="noopener noreferrer">NIST SP 800-53 Rev. 5</a></th><td>Release 5.2.0: 1.014 controlli e miglioramenti attivi; voci ritirate escluse. Non equivale a una baseline selezionata.</td></tr>
    <tr><th><a href="https://www.acn.gov.it/portale/documents/d/guest/regolamentocloud" target="_blank" rel="noopener noreferrer">Regolamento unico cloud · ACN 21007/24</a></th><td>254 punti codificati dell’allegato 2 e 267 dell’allegato 3. Profili cumulativi ordinari, critici, strategici. Articoli, clausole non codificate e allegato 4 esclusi.</td></tr>
    <tr><th><a href="https://www.cybersecurityframework.it/" target="_blank" rel="noopener noreferrer">FNCDP 2025 · v2.1</a></th><td>106 riferimenti e domande di audit originali. Testo ufficiale importabile da una copia autorizzata; non redistribuito nel pacchetto.</td></tr>
    <tr><th><a href="https://www.iso.org/standard/27001" target="_blank" rel="noopener noreferrer">ISO/IEC 27001:2022 + Amd 1:2024</a></th><td>93 riferimenti Annex A e 25 schede originali sul sistema di gestione. Nessun testo normativo completo; integrare contenuti autorizzati.</td></tr>
    <tr><th><a href="https://www.cisecurity.org/controls/v8-1" target="_blank" rel="noopener noreferrer">CIS Controls v8.1</a></th><td>18 schede originali a livello Control. Non include i 153 Safeguard né i gruppi IG; integrare contenuti autorizzati.</td></tr>
  </tbody></table></div><p>Le corrispondenze tra framework non sono equivalenze automatiche. Il modello di maturità 0–5 e il triage delle azioni sono criteri locali esplicitati nell’applicativo.</p></div></details>

  <section class="mm-lab-release" aria-labelledby="mm-lab-release-title"><div><p class="mm-lab-eyebrow">Versioni &amp; download</p><h2 id="mm-lab-release-title">Un laboratorio che puoi portare con te.</h2><p>TITANIUM è open source: il codice originale è riutilizzabile anche commercialmente secondo la licenza MIT. I cataloghi e i materiali di terzi mantengono le proprie condizioni; consulta gli avvisi inclusi nei download. WordPress ospita la demo; i dati sintetici iniziali e quelli inseriti dall’utente restano distinti dai testi delle fonti ufficiali. Il lavoro rimane nel browser.</p></div><div class="mm-lab-release-links"><a class="mm-lab-button mm-lab-button-outline" href="<?php echo esc_url($template_url); ?>" download>Scarica il template ↓</a>
  <?php if ($repository_url) : ?><a href="<?php echo esc_url($repository_url); ?>" target="_blank" rel="noopener noreferrer">Codice su GitHub ↗</a><?php endif; ?>
  <?php if ($download_url) : ?><a href="<?php echo esc_url($download_url); ?>" target="_blank" rel="noopener noreferrer">Versione scaricabile ↗</a><?php endif; ?>
  </div></section>
</div>
