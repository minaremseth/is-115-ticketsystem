# Saklig – ticketsystem

Saklig er en webapplikasjon laget i emnet IS-115. Målet er å utvikle et enkelt kundeservicesystem der kunder kan sende inn henvendelser og følge sakene sine, mens supportbehandlere kan prioritere, behandle og svare på saker.

## Prosjektdeltakere

- Mina
- Jimmy

## Sprint 1-demo

I første sprint har vi konsentrert oss om prosjektideen, de viktigste sidene og navigasjonen mellom dem. Løsningen er derfor en tidlig prototype og ikke et ferdig ticketsystem.

Demoen viser:

- en startside med skjema for å opprette en sak
- en enkel side for «Mine saker»
- en adminoversikt med kolonner for sak, prioritet, status og ansvarlig
- en detaljside med eksempeldata, meldingshistorikk, svarfelt og statusvalg
- felles navigasjon mellom de sentrale sidene
- en enkel og gjennomgående layout

## Avgrensninger i Sprint 1

- Innsendingsskjemaet lagrer foreløpig ikke nye saker
- «Mine saker» viser en tom tabell som plassholder
- Foreløpig finnes det ingen database eller permanent lagring
- Innlogging og forskjellige brukerkontoer er ikke implementert
- Vedlegg blir ikke lastet opp eller lagret
- Svar og statusendringer på detaljsiden lagres kun midlertidig i nettleserøkten

## Slik vises demoen

1. Start Apache i XAMPP.
2. Legg prosjektet i XAMPP-mappen `htdocs`.
3. Åpne `http://localhost/is-115-ticketsystem/` i nettleseren.
4. Bruk navigasjonsmenyen for å gå mellom «Opprett sak», «Mine saker» og «Admin».

## Prosjektstruktur

- `index.php` – startside med skjema for en ny henvendelse
- `mine-saker.php` – foreløpig kundeoversikt
- `admin.php` – foreløpig oversikt for supportbehandlere
- `ticket-detaljer.php` – forenklet visning og behandling av en valgt sak
- `header.html` – felles topp og navigasjon
- `tickets.php` – eksempeldata og hjelpefunksjoner til prototypen

## Teknologi

- HTML5
- PHP
- XAMPP med Apache
- Git og GitHub

## Planlagt videre arbeid

- lagre saker i MySQL
- koble innsendingsskjemaet til «Mine saker» og adminoversikten
- koble meldingshistorikk og svar til databasen
- støtte permanent endring av status, prioritet og ansvarlig behandler
- legge til innlogging for kunder og supportbehandlere
- gjøre nettsiden mer brukervennlig i forhold til UI
- validere og lagre vedlegg
=======
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
