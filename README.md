# is-115-ticketsystem

Dette prosjektet er et kundeservicesystem utviklet i emnet IS-115. Systemet lar kunder sende inn støttehenvendelser og følge status på sine saker.

## Prosjektdeltakere
* Mina
* Jimmy

## Prosjektstruktur (Sprint 1)
* `header.html` – Felles navigasjonsmeny og HTML-hode for alle sider.
* `index.php` – Hovedside med skjema for å opprette ny ticket.
* `mine-saker.php` – Kundeoversikt over innsendte saker.
* `admin.php` – Adminpanel for behandling av tickets.

## Teknologi
* HTML5 / CSS
* PHP
* XAMPP (Apache)
* Git / GitHub


## Prosjektidé og Funksjonalitet

## Prosjektidé
Målet med prosjektet er å utvikle et digitalt ticketsystem (kundeservicesystem) for **Mina og Jimmys Kundeservice**. Systemet skal forenkle og effektivisere kommunikasjonen mellom kunder og supportavdelingen. 

Kunder skal enkelt kunne sende inn støttehenvendelser, mens supportagenter og administratorer får et ryddig verktøy for å behandle, prioritere og løse sakene.

---

## Målgrupper og Brukerroller
1. **Kunde (Sluttbruker):** Trenger en enkel måte å rapportere problemer eller stille spørsmål på, samt oversikt over sine egne saker.
2. **Administrator / Supportagent:** Trenger et internt dashbord for å administrere innkomne henvendelser, endre status og besvare saksbehandlingen.

---

## Planlagt Funksjonalitet

### 1. Opprette ticket (Kunde)
* **Skjema for henvendelse:** Kunden fyller ut navn, e-post, valgt kategori (Teknisk støtte, Betaling/faktura, Generelt), emne og beskrivelse.
* **Filopplasting:** Mulighet til å legge ved et vedlegg (bilde eller dokument) som utdyper problemet.
* **Validering:** Obligatoriske felt sikrer at all nødvendig informasjon blir sendt inn.

### 2. Mine saker (Kunde)
* **Oversiktstabell:** Kunden får opp en liste over alle sine tidligere innsendte henvendelser.
* **Saksstatus:** Viser gjeldende status på hver enkelt sak (f.eks. *Åpen*, *Under behandling*, *Løst*).
* **Sortering/Dato:** Viser tidsstempel for når saken ble opprettet.

### 3. Adminpanel (Saksbehandler)
* **Oversikt over alle tickets:** Administrator ser en samlet liste over alle innkomne saker fra alle kunder.
* **Saksbehandling og statusendring:** Mulighet til å åpne en sak, endre status og legge til interne notater eller svar.
* **Filtrering:** Mulighet til å filtrere saker basert på kategori eller status.

### 4. Databasestruktur (Backend)
* **Lagring i MySQL:** Alle innsendte tickets og filreferanser lagres trygt i en database via XAMPP.

