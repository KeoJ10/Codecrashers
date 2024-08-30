# CodeCrashers

Deze repository correspondeert met de [**HTML**](https://codecrashers.nl/lesmateriaal/html) cursus van CodeCrashers.

---

## Handleiding opdrachten inleveren

CodeCrashers maakt gebruik van GitHub om studenten te voorzien van een gestroomlijnd proces om opdrachten in te leveren bij hun docenten, en ervoor te zorgen dat zij vanuit elke locatie bij hun opdrachten kunnen komen. Bovendien zorgt het ervoor dat de betrokken docenten ook te allen tijde bij deze ingeleverde opdrachten kunnen komen, zonder dat er allerlei bestanden heen en weer verstuurd hoeven te worden.

Een bijkomend voordeel is dat er altijd een versiegeschiedenis wordt bijgehouden van enige aanpassingen aan de opdrachten zodat er altijd terug kan worden gegaan naar een eerder tijdstip als er iets fout gaat.

Per cursus wordt een repository aangeboden met daarin de volledige mappenstructuur voor alle opdrachten van die cursus. De student neemt deze mappenstructuur als template waarin hij/zij vervolgens zijn/haar eigen opdrachten gaat plaatsen.

Deze uniformiteit zorgt er enerzijds voor dat de student altijd een bepaalde opdracht eenvoudig kan terugvinden, en de docent ook weet waar hij/zij een bepaalde opdracht kan vinden om deze na te kijken en van feedback te voorzien.

## Inhoudsopgave

- [Inhoud van de repository](#inhoud-van-de-repository)
	- [Mappenstructuur](#mappenstructuur)
	- [Wijzigingen in lesmateriaal](#wijzigingen-in-lesmateriaal)
- [Voorbereiding](#voorbereiding)
	- [Installatie Git](#installatie-git)
	- [GitHub account](#github-account)
- [Werkwijze](#werkwijze)
	- [Repository aanmaken](#repository-aanmaken)
	- [Docenten toegang geven](#docenten-toegang-geven)
	- [Repository clonen](#repository-clonen)
	- [Repository vullen](#repository-vullen)
	- [Mappen synchroniseren](#mappen-synchroniseren)
	- [Opdrachten inleveren](#opdrachten-inleveren)

## Inhoud van de repository

### Mappenstructuur

Elke cursus heeft zijn eigen repository op GitHub met een eigen mappenstructuur.

Binnen een repository is er één map per les. Per les tref je afzonderlijke mappen aan voor elk van de te maken opdrachten. Binnen de map van een opdracht tref je een `.gitkeep` bestand aan. Dit bestand kun je verder negeren - deze is er puur voor bedoeld zodat GitHub de (anders lege) map wel indexeert.

Er is gekozen om de mapnamen volledig in kleine letters en met dashes (`-`) in plaats van spaties te spellen. Hierdoor komt de mappenstructuur zo veel mogelijk overeen met de structuur van URL's die je ook op internet kunt verwachten. Tevens verzekeren we hiermee dat de volledige mappenstructuur compatibel is binnen een (lokale) ontwikkelserver zoals XAMPP, waar spaties en dergelijke voor problemen kunnen zorgen.

### Wijzigingen in lesmateriaal

ICT is altijd in beweging, en dat geldt ook voor het lesmateriaal van CodeCrashers. Het is dus mogelijk dat de inhoud van een cursus wijzigt terwijl jij er al mee bezig bent. Denk bijvoorbeeld aan een verandering in de volgorde van de lessen of nieuwe opdrachten erbij.

In dergelijke gevallen dien je er zelf zorg voor te dragen dat de structuur van jouw eigen repository weer overeenkomt met het lesmateriaal. Houd je daarbij aan de geldende conventies zodat eventuele nieuwe of veranderde mappen consistent blijven met de rest van de mappenstructuur.

## Voorbereiding

### Installatie Git

Controleer of Git is geïnstalleerd op de computer waar je op wil werken. GitHub draait onder de motorkap namelijk op Git.

Indien je de computer in eigen beheer hebt kun je Git ook zelf installeren via de officiële website. Zie ook: [https://git-scm.com/book/en/v2/Getting-Started-Installing-Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git).

Kort samengevat, wanneer je op Linux of Mac werkt kun je Git eenvoudig installeren via de command line. Voor Windows heb je een installer nodig, welke je [hier](https://git-scm.com/download/win) kan downloaden.

Tijdens de (Windows) installatie krijg je een aantal opties. Om het eenvoudig te houden kun je in vrijwel alle gevallen gewoon de standaard instellingen gebruiken.

![Git installer - default](https://codecrashers.nl/img/github/readme-git-installer-1.png)

Wel kan het handig zijn om Notepad++ (of een andere editor waar je comfortabel mee bent) te kiezen als *default editor* voor Git in plaats van de standaard optie Vim.

![Git installer - editor](https://codecrashers.nl/img/github/readme-git-installer-3.png)

### GitHub account

Om gebruik te kunnen maken van deze repository dien je over een GitHub account te beschikken. Registreer jezelf bij GitHub als je daar nog niet over beschikt. Dat kan via deze URL: [https://github.com/signup](https://github.com/signup).

![GitHub profiel](https://codecrashers.nl/img/github/readme-github-profile.png)

Zorg dat je de volledige URL van je GitHub profiel kopieert en plakt op de profielpagina in het dashboard van je CodeCrashers account. Dit zorgt ervoor dat je docenten altijd snel bij jouw opdrachten kunnen komen.

![GitHub link op CodeCrashers](https://codecrashers.nl/img/github/readme-github-cc.png)

*Zorg dat je de andere instellingen ook bijwerkt, als je dat nog niet gedaan had. In het kader van consistentie en herkenbaarheid heeft het onze voorkeur dat je dezelfde profielfoto gebruikt op GitHub als op CodeCrashers, maar dat is niet verplicht.*

## Werkwijze

### Repository aanmaken

Om gebruik te kunnen maken van de aangeleverde mappenstructuren, dien je eerst over een eigen repository te beschikken in jouw eigen GitHub account voor alle opdrachten die je gaat maken in je opleiding.

Ga naar je repositories tab en klik op de knop "New". Geef je repository een duidelijke naam zodat je docenten weten dat ze hier jouw opdrachten kunnen vinden. Bijvoorbeeld "opdrachten", "CodeCrashers", of de naam van de organisatie waar je je opleiding volgt.

**Let op:** zorg ervoor dat je bij de privacy-instellingen op de optie "Private" klikt. Om de kwaliteit van de opleiding voor andere studenten te waarborgen willen we namelijk niet dat uitwerkingen van opdrachten publiekelijk toegankelijk worden gemaakt.


![nieuwe repository aanmaken](https://codecrashers.nl/img/github/readme-new-repo.png)

De andere instellingen mag je hetzelfde laten. Klik vervolgens op de knop "Create repository".

Als je alles goed hebt gedaan, beschik je nu over een *eigen* repository. Controleer nog even of deze inderdaad op "Private" staat.

![nieuwe repository aanmaken](https://codecrashers.nl/img/github/readme-new-repo-private.png)

### Docenten toegang geven

Zodat zij jouw opdrachten kunnen nakijken, is het van belang dat je jouw docenten uitnodigt om jouw repository te kunnen bekijken.
Klik op de knop "Settings" en ga naar "Collaborators" onder "Access".

Klik vervolgens op de knop "Add people" en vul de GitHub usernames of e-mailadressen in van je docent(en). Vervolgens kun je ze toevoegen als "Collaborator" aan jouw repository.

![nieuwe repository aanmaken](https://codecrashers.nl/img/github/readme-new-repo-invite-collaborator.png)

### Repository clonen

Je kunt het meest efficiënt werken aan je opdrachten als je deze al direct maakt op de juiste plek in de mappenstructuur.

Om dat te bewerkstelligen dien je een lokale *clone* van je repository te krijgen. De eenvoudigste manier om dat te doen is door middel van Git commando's via een CLI (*Command Line Interface*).

Start een shell op zoals CMD (Windows) of Bash (Unix). Sommige editors zoals Visual Studio Code beschikken over een ingebouwde terminal op - die kun je natuurlijk ook gebruiken.

Navigeer naar de locatie waar je je repository wil downloaden. Om in een shell te navigeren gebruik je `cd ../` om een map omhoog te gaan en `cd {naamvanmap}` om een map dieper te gaan.

*Tip: als je gebruikt maakt van software als XAMPP is het handig om je repository te clonen binnen de `htdocs` folder van XAMPP. Dan beschik je al direct over een werkende webserver als dat nodig is, bijvoorbeeld voor PHP opdrachten.*

Gebruik vervolgens het volgende commando, waarbij je je `{gebruikersnaam]` en `{repository]` vervangt door je eigen gebruikersnaam en de repository die je wil clonen (zonder accolades).

```
git clone https://github.com/{gebruikersnaam}/{repository}.git
```

![repository clonen 1](https://codecrashers.nl/img/github/readme-git-clone-repo-1.png)

Als het goed is wordt je nu gevraagd om in te loggen om Git te autoriseren.

*Tip: als je werkt op een computer waar alleen jij toegang toe hebt kun je eventueel ook gebruik maken van een SSL in plaats van een HTTPS verbinding. Dan hoef je in principe nooit meer opnieuw in te loggen. Zie [de documentatie](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/about-authentication-to-github).*

![repository clonen 2](https://codecrashers.nl/img/github/readme-git-clone-repo-2.png)

Als de authenticatie gelukt is, zal de repository succesvol *gecloned* worden.

![repository clonen 3](https://codecrashers.nl/img/github/readme-git-clone-repo-3.png)

Controleer ten slotte of er een map met de naam van je repository is aangemaakt in je lokale omgeving. Deze map zou verder nog leeg moeten zijn, met uitzondering van een (mogelijk onzichtbare) ".git" subdirectory.

![repository clonen 4](https://codecrashers.nl/img/github/readme-git-clone-repo-4.png)

### Repository vullen

Vervolgens ga je *binnen* je lokale repository de mappen toevoegen van de cursus waarmee je wil beginnen. De gehele mappenstructuur kun je eenvoudig downloaden binnen een repository als die van HTML via de knop "Code" en vervolgens "Download Zip".

![repository downloaden](https://codecrashers.nl/img/github/readme-download-repo.png)

Pak de inhoud van deze zip vervolgens uit binnen je repository. Als je het goed hebt gedaan zou de map HTML, met daarin alle HTML lessen en opdrachten, vervolgens op je eigen computer moeten verschijnen. Zorg dat je wel een eventueel "-main" of "-master" achtervoegsel uit de mapnaam weghaalt.

![repository clonen 5](https://codecrashers.nl/img/github/readme-git-repo-vullen.png)

*Voel je vrij om de README.md te verwijderen of te vervangen door je eigen readme.*

Vanaf nu kun je de opdrachten al maken op de correcte plek.

Wanneer een opdrachtomschrijving vraagt om een map aan te maken, hoef je dat dus niet meer te doen - deze map heb je immers al. Wanneer een opdrachtomschrijving vraagt om de map van een eerdere opdracht te kopiëren, hoef je alleen nog maar de *inhoud* van die eerdere opdracht te kopiëren.

### Mappen synchroniseren

Zodra je mappenstructuur lokaal in orde is dien je deze te *pushen* naar je GitHub repository. 

Je kunt je bestanden naar GitHub *pushen* door gebruik te maken van Git via een shell. Je kunt verbinden met je GitHub account via HTTPS of SSL. 

Hiervoor dien je eerst via een shell te navigeren naar de root map van je repository op je computer.

Om jouw lokale mappenstructuur te uploaden naar je GitHub repository online voer je achtereenvolgens de volgende commando's uit:

```
git add .
git commit -m "Een optioneel bericht"
git push
```

![git commit](https://codecrashers.nl/img/github/readme-git-commit.png)

![git push](https://codecrashers.nl/img/github/readme-git-push.png)

Als je het goed hebt gedaan is de volledige mappenstructuur nu ook op GitHub te zien.

### Opdrachten inleveren

Om je gemaakte of verbeterde opdrachten in te leveren dien je simpelweg je gehele repository een keer te pushen, zoals hierboven uitgelegd. Doe dit zo vaak mogelijk - in ieder geval zodra je een volledige les af hebt, of aan het einde van een werkdag.

![opdrachten inleveren](https://codecrashers.nl/img/github/readme-opdrachten-inleveren.png)

Met een *pull* kun je jouw lokale clone synchroniseren met de laatste stand van zaken op GitHub. Dit kan handig zijn wanneer je op verschillende locaties aan je opdrachten hebt gewerkt.

```
git pull
```

![git pull](https://codecrashers.nl/img/github/readme-git-pull.png)

Het is verstandig dat je altijd een keer *pullt* voordat je iets nieuws *pusht*, zeker wanneer je van computer hebt gewisseld. Zo kun je je lokale ontwikkelomgeving en je GitHub repository dus altijd *in sync* houden!

Wanneer je één of meerdere nieuwe of verbeterde opdrachten op GitHub hebt gezet, dien je je je voortgang zo snel mogelijk bij te werken in CodeCrashers.

Om aan te geven dat je een opdracht af hebt en deze wacht op feedback, verander je de status in het symbool van het klokje.

![opdracht aanbieden](https://codecrashers.nl/img/github/readme-cc-aanbieden.png)

Je docent kan dan vanuit zijn dashboard zien dat er nieuwe opdrachten zijn die beoordeeld dienen te worden.

---

*Herhaal dit proces elke keer wanneer je aan een nieuw vak begint, zoals CSS, SEO, JavaScript of PHP.*

![meerdere vakken](https://codecrashers.nl/img/github/readme-meerdere-vakken.png)