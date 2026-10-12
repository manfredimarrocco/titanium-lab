# TITANIUM — GRC Audit Lab

A browser-based workspace for selecting requirements, recording evidence, assessing gaps and planning actions. TITANIUM is an open-source demonstration with an Italian interface and synthetic initial data. Judgments are manual; it does not certify compliance.

**[Try the WordPress demo](https://manfredimarrocco.blog/lab/#titanium)** · **[Download v0.2.5](https://github.com/manfredimarrocco/titanium-lab/releases/tag/v0.2.5)** · **[Technical guide](docs/TECHNICAL.md)**

Version 0.2.5 is a demonstration pre-release.

## Features and use cases

- Create an audit without synthetic judgments; select scope and add versioned catalogs with source references.
- Record outcomes, evidence references, maturity, gaps, actions, owners and deadlines.
- Explore outcome distribution, framework comparisons, maturity radar, action urgency heatmap, deadline bars and explicitly recorded progress snapshots.
- Import XLSX/CSV with column mapping and validation preview; export requirement XLSX, action-plan CSV or a complete JSON work file.
- Generate summary/detail reports and save PDF through browser printing.

Use TITANIUM to learn audit workflows, discuss governance decisions or prototype assessments with synthetic data. Review applicability, sources and methodology before any real professional use. No automatic mapping proves compliance or equivalence between frameworks.

## Quick start

1. Download `TITANIUM-0.2.5-standalone.zip` from the release above and extract it.
2. Open `TITANIUM/index.html` in a current Edge, Chrome or Firefox browser.
3. Explore the synthetic Orion audit or choose **Nuovo audit** to start with unevaluated requirements.
4. Use **Salva lavoro** to download JSON before closing. Reloading restores the initial demonstration.

No server, account or paid service is required. Repository source opens at `wordpress/mm-grc-lab/app/index.html`. The plugin ZIP integrates the same app with an existing WordPress site; installation details are in the technical guide. WordPress hosts the public demo; GitHub provides source history and downloads.

## Included catalogs

Static snapshot checked on 12 October 2026: **9 catalogs, 2,086 entries**. These are not synchronized databases or universally applicable baselines.

| Reference | Coverage | Limits |
|---|---|---|
| NIS2 — ACN 379907/2025 | 87 important-entity or 116 essential-entity requirements | Annexes 1–2 security measures; incident annexes excluded. Select the applicable profile. |
| NIST CSF 2.0 | 106 active Core subcategories in English | No automatic conformity or Tier assignment. |
| NIST SP 800-53 Rev. 5, release 5.2.0 | 1,014 active controls and enhancements | Withdrawn entries excluded; parameters require definition; no baseline selected automatically. |
| RUC — ACN 21007/24 | 254 annex-2 infrastructure and 267 annex-3 cloud-service points | Cumulative profiles; articles, uncoded provisions and annex 4 excluded. Not the entire qualification procedure. |
| FNCDP 2025 v2.1 | 106 identifiers and original audit questions | Official descriptive text is not redistributed. |
| ISO/IEC 27001:2022 + Amd 1:2024 | 25 original management-system prompts and 93 Annex A identifiers | No full standard or official Annex A titles. Consult an authorized copy and determine applicability. |
| CIS Controls v8.1 | 18 original Control-level prompts | No 153 Safeguards or Implementation Group assignments. |

See [third-party notices](THIRD-PARTY-NOTICES.md) for editions, sources, attribution and transformations. Official requirements, original prompts and local assessment rules have different roles.

## Import and export

Use [TITANIUM-template.xlsx](https://github.com/manfredimarrocco/titanium-lab/releases/download/v0.2.5/TITANIUM-template.xlsx): 25 requirement fields, Audit/Guida sheets and three synthetic examples to replace. XLSX/CSV imports are capped at 5 MB and 5,000 total requirements. VBA and date-system 1904 are rejected. The reader does not execute formulas: use plain values and text dates `YYYY-MM-DD`.

Rows match on **Framework + Versione + Codice**. Review mapping before applying. Present columns, including empty cells, update fields; absent columns preserve them. Validation errors reject the whole import. **Non applicabile** requires a reason. Publisher workbooks may need restructuring; this is not a universal standards-file parser.

JSON retains metadata, scope, rows, snapshots and activity log. XLSX retains the 25 requirement fields, not complete project history. Action-plan CSV is a focused export. Imported content remains subject to its own rights; do not commit or redistribute it without permission.

## Local processing and privacy

Audit data is processed in browser memory. There is no account, database, automatic persistent storage, cloud save or runtime API. The app's Content Security Policy blocks network connections; the embedded view has a sandboxed origin. Evidence fields contain text references, not uploaded attachments.

The surrounding WordPress page can still make hosting/analytics requests. Browser extensions and device security are outside the app's guarantee; source links open external sites. Exports and reports contain whatever the user enters and must be protected accordingly. The standalone distribution can be used off the public website.

## Scoring and limitations

- **Completion:** assigned judgments, including justified not-applicable entries, divided by in-scope requirements.
- **Judged-outcome index:** `(Conforme + 0.5 × Parzialmente conforme) / (Conforme + Parzialmente conforme + Non conforme)`. Unevaluated and not-applicable entries are excluded; no evaluated entries means no score.
- **Legacy index:** separate display with a different denominator, including unevaluated applicable entries.
- **Maturity:** local 0–5 scale, distinct from NIST Tiers. Triage exposes severity, overdue actions, missing ownership and incomplete evidence contributions.

Closing an action does not change its judgment. Progress snapshots refer to the same selected scope. Catalogs differ in scope and granularity; percentages are not automatic conformity comparisons. No score is a certification, legal opinion or assurance conclusion. Calculation details are in the technical guide.

## Contributing

Use [issues](https://github.com/manfredimarrocco/titanium-lab/issues) for reproducible defects and scoped proposals, and pull requests for changes. Include synthetic examples, browser details and the affected version. Catalog changes require an official source, edition, coverage and redistribution conditions. Preserve notices and test affected import/export and scoring flows. Never submit customer workbooks, real findings, credentials or confidential evidence.

## License

Original code and original documentation are [MIT licensed](LICENSE), permitting reuse and modification, including commercial use, subject to MIT conditions. **MIT does not relicense third-party standards, official source material or user-imported content.** NIST attribution/modification notices and JSZip's MIT notice accompany their respective contents. ISO, CIS and FNCDP prompts are original references, not copies of their publications. Preserve [THIRD-PARTY-NOTICES.md](THIRD-PARTY-NOTICES.md) with every distribution.

See the [technical guide](docs/TECHNICAL.md) for installation, shortcode configuration, catalogs, imports, reports, limits and manual updates, and the [changelog](CHANGELOG.md) for version history.
