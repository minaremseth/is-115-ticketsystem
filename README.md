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
