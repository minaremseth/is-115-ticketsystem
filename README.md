# Saklig – IS-115 Ticketsystem

**Saklig** er en webapplikasjon utviklet i emnet IS-115. Målet er å skape et digitalt kundeservicesystem for **Saklig Kundeservice** som forenkler og effektiviserer kommunikasjonen mellom kunder og supportavdelingen. 

Systemet lar kunder sende inn henvendelser og følge sine saker, mens supportagenter og administratorer får et ryddig verktøy for å prioritere, behandle og besvare sakene.

## Prosjektdeltakere
* Mina
* Jimmy

---

## Målgrupper og Brukerroller
1. **Kunde (Sluttbruker):** Trenger en enkel måte å rapportere problemer eller stille spørsmål på, samt oversikt over sine egne saker.
2. **Administrator / Supportagent:** Trenger et internt dashbord for å administrere innkomne henvendelser, endre status og besvare saker.

---

## Sprint 1: Demo og Status

I første sprint har vi konsentrert oss om prosjektideen, de viktigste sidene og navigasjonen mellom dem. Løsningen er en tidlig prototype.

### Hva demoen viser
* **Startside (`index.php`):** Skjema for å opprette ny sak (navn, e-post, kategori, emne, beskrivelse og vedlegg).
* **Mine saker (`mine-saker.php`):** Enkel kundeoversikt med plassholder-tabell.
* **Adminoversikt (`admin.php`):** Oversikt for supportbehandlere med kolonner for sak, prioritet, status og ansvarlig.
* **Saksdetaljer (`ticket-detaljer.php`):** Visning av valgt sak med eksempeldata, meldingshistorikk, svarfelt og statusvalg.
* **Felles navigasjon (`header.html`):** Gjennomgående layout og toppmeny på alle sider.
* **Eksempeldata (`tickets.php`):** Hjelpefunksjoner og mockdata lagret i sesjon (`$_SESSION`).

### Avgrensninger i Sprint 1
* Innsendingsskjemaet lagrer foreløpig ikke nye saker permanent.
* Det finnes ingen database tilkoblet ennå (MySQL).
* Innlogging og autentisering av brukerkontoer er ikke implementert.
* Vedlegg blir ikke prosessert eller lagret på serveren.
* Endringer i svar og status lagres kun midlertidig i nettleserøkten (`$_SESSION`).

---

## Slik kjøres prosjektet lokalt

1. Start **Apache** i XAMPP.
2. Legg prosjektmappen inn i XAMPP sin `htdocs`-mappe.
3. Åpne `http://localhost/is-115-ticketsystem/` i nettleseren.
4. Bruk navigasjonsmenyen til å teste sidene («Opprett ticket», «Mine saker» og «Admin»).

---

## Prosjektstruktur
* `header.html` – Felles navigasjonsmeny og HTML-hode for alle sider.
* `index.php` – Startside med skjema for å sende inn en henvendelse.
* `mine-saker.php` – Kundeoversikt over tidligere innsendte saker.
* `admin.php` – Dashbord for saksbehandlere med oversikt over alle saker.
* `ticket-detaljer.php` – Detaljvisning og behandling av en spesifikk sak.
* `tickets.php` – Mockdata, økthandtering (`$_SESSION`) og hjelpefunksjoner.

---

## Teknologi
* HTML5 / CSS
* PHP
* XAMPP (Apache)
* Git og GitHub

---

## Planlagt videre arbeid (Kommende sprinter)
* **Databaseintegrasjon:** Opprette MySQL-database og lagre saker, brukere og meldinger permanent.
* **Dynamisk kobling:** Koble innsendingsskjemaet direkte mot «Mine saker» og adminpanelet.
* **Brukerhåndtering:** Implementere innlogging og rettighetsstyring (kunde vs. admin).
* **Filbehandling:** Validere og lagre opplastede vedlegg trygt på serveren.
* **UI/UX-forbedringer:** Gjøre grensesnittet mer brukervennlig og universelt utformet.