# TITANIUM technical guide

The interface is Italian. There is no build step or CDN dependency. Keep LICENSE, THIRD-PARTY-NOTICES.md and vendor/JSZip-LICENSE.md with redistributed software.

## WordPress installation and configuration

Declared minimums: WordPress 6.0 and PHP 7.4. A current JavaScript-enabled browser is required. Upload the versioned plugin ZIP through Plugins → Add New → Upload and activate it. Live installation requires the site owner's approval.

Choose a page template that renders post content. Add one Shortcode block:

```text
[mm_grc_lab repository="https://github.com/manfredimarrocco/titanium-lab" download="https://github.com/manfredimarrocco/titanium-lab/releases/tag/v0.2.5"]
```

Only use release URLs that exist. Attributes and optional filters `mm_grc_lab_repository_url` / `mm_grc_lab_download_url` accept HTTPS URLs on github.com only; missing/rejected links are hidden. The plugin creates no pages, settings, navigation or API endpoints. Assets load on singular pages containing the shortcode. `#titanium` identifies the demo.

Use the site's existing SEO system for the Lab page; do not duplicate canonical or structured data. The static app is noindex,nofollow. The embedded app launches on demand in a sandbox without allow-same-origin. Scripts, downloads, printing and external-source popups are permitted. Use **Apri in una scheda** if a browser's file picker differs inside the iframe.

## Standalone

Extract the ZIP and open TITANIUM/index.html in current Edge, Chrome or Firefox. Keep adjacent scripts, styles, vendor directory, template and legal files together. No server is required. Browser policies may restrict downloads/popups/printing; review browser prompts without disabling security controls.

## Audits and catalogs

Initial Orion data is synthetic. **Nuovo audit** selects an initial catalog with all outcomes **Da valutare**. **Cataloghi** adds requirements and edits scope. Select the NIS2 profile explicitly; RUC profiles are cumulative. Catalogs are static snapshots. Review sources, applicability and coverage before professional use.

**Requisiti & audit** edits outcomes, maturity, evidence, gaps and actions. **Non applicabile** needs a reason. Evidence fields are textual references, not uploaded attachments. Closing an action does not change a requirement judgment. **Registra rilevazione** stores an explicit progress snapshot for the selected scope.

## XLSX/CSV import

Use the template's Audit sheet and Guida instructions. It has 25 fields; Framework, Versione, Codice and Requisito are mandatory. Limits: 5 MB input, 5,000 total requirements and 20 MB uncompressed XLSX parts. VBA and date-system 1904 are rejected. Formulas are not executed or recalculated; import values and prefer text dates YYYY-MM-DD.

Choose **Importa Excel / CSV**, select a file, review sheet/column mapping/defaults, validate and apply. Keys are Framework + Versione + Codice. Merge mode adds new keys and updates existing rows. Mapped empty cells clear fields, absent columns preserve them. Duplicate keys and any validation error reject the operation. Publisher files may need a flat-table conversion.

## Export, reimport and reporting

**Salva lavoro** downloads a JSON project (schema titanium-lab-2): metadata, rows, scope, snapshots and log. **Apri lavoro** validates and replaces the session with a compatible JSON file, up to 10 MB. Save current work first.

XLSX preserves the 25 requirement fields, not metadata/history, so it is not a complete backup. Action CSV exports action details and priority reasons. All outputs can contain user-entered sensitive information.

**Report** provides summary/detail selection. **Stampa / PDF** uses browser printing; choose Save as PDF there. Reports reflect selected scope and manual judgments. They are not uploaded to WordPress.

## Calculation details

Completion and judged-outcome index are defined in README. The legacy score uses applicable in-scope entries as denominator, including unevaluated entries; not-applicable entries are excluded. Empty denominators produce no score.

Triage: severity +1/+2/+3 for low/medium/high gaps; +2 for an overdue open action; +1 for missing ownership where an action or judgment exists; +1 for an evaluated requirement without complete valid evidence. Urgent ≥5, high ≥3, otherwise monitor when nonzero. These are internal workflow rules, not probabilistic risk or normative ratings. Evidence coverage uses evaluated entries and requires verified evidence valid on the current date. Maturity is a local 0–5 scale, not NIST Tiers.

## Manual releases and updates

Publish after authorization and validation. Create a new version/tag rather than silently replacing inspected assets. Update the plugin header, asset queries, source version, seed version and displayed Lab version together. Update CHANGELOG and notices as needed. Preserve previous releases unless removal is expressly authorized.

Plugin ZIP: include wordpress/mm-grc-lab/ as mm-grc-lab/, with legal files. Standalone ZIP: include app/ as TITANIUM/, plus README, docs/TECHNICAL.md, LICENSE and THIRD-PARTY-NOTICES at matching relative paths. Include the template as a separate asset. Check ZIP integrity and unpacked bytes against tagged sources; exclude test artifacts and confidential originals.

Manually update the WordPress plugin and the shortcode's download URL after the release exists. Preserve other page settings and validate the exact installed version. No automatic deployment, GitHub token at runtime, cloud database or paid service is needed.

## Known limits

Pre-release demonstration, no automatic save or concurrent editing. Reload/close discards unsaved work. Catalog versions can change and imported content must be lawfully obtained. ISO/CIS/FNCDP official descriptive text is not bundled. NIS2 incident annexes and the complete RUC procedure are outside coverage. Cross-framework references are not equivalence proofs.

The public page can make hosting/analytics requests despite the app's blocked connections. Local tests do not establish compatibility with every WordPress/PHP/browser combination; verify the destination environment.
