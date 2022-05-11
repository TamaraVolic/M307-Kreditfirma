# M307-Kreditfirma

## Datenbank

Krediteintrag auf der Webseite:

<img src="https://media.discordapp.net/attachments/913723695967641600/973898770481819658/unknown.png">

Krediteintrag in der Datenbank:

<img src="https://media.discordapp.net/attachments/913723695967641600/973899379901603840/unknown.png">

Datenbank Tabellen:

Kredit Pakete:

<img src="https://media.discordapp.net/attachments/913723695967641600/973899730637684756/unknown.png">

Kredite:

<img src="https://media.discordapp.net/attachments/913723695967641600/973899792633708594/unknown.png">


Beziegung:

<img src="https://media.discordapp.net/attachments/913723695967641600/973902046694608916/datenbang.png">

## Testfälle

### Testfall Nummer 1

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich verbinde mich zu der Seite mit der /createcredit route. | 
| Wenn| Ich gebe die folgenden Angaben ein: <br> Vorname: Max <br> Nachname: Mustermann <br> E-Mail: max.mustermann@sluz.ch <br> Telefonnummer: +41 77 449 75 00 <br> Kredit Paket: Kredit Basic: 1k <br> Anzahl der Raten: 2 <br> Ich klicke auf den Kredit Erstellen knopf. | 
| Dann| Ein neuer Kredit wird in der Datenbank eingefügt |

### Testfall Nummer 2

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich verbinde mich zu der Seite mit der /createcredit route. | 
| Wenn| Ich gebe die folgenden Angaben ein: <br> Vorname: Max <br> Nachname: Mustermann <br> E-Mail: max.mustermann@sluz <br> Telefonnummer: +41 77 449 75 00 <br> Kredit Paket: Kredit Basic: 1k <br> Anzahl der Raten: 2 <br> Ich klicke auf den Kredit Erstellen knopf. | 
| Dann| Der Kredit wird nicht erstellt und ich erhalte eine Fehlermedung, die E-Mail ist nicht gültig. |

### Testfall Nummer 3

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich verbinde mich zu der Seite mit der /home route. | 
| Wenn| Ich klicke auf Kredit Übersicht. | 
| Dann| Ich komme auf die Korrekte View, im diesem fall /creditlist |

### Testfall Nummer 4

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich verbinde mich zu der Seite mit der /creditlist route. | 
| Wenn| Ich klicke auf den Bearbeiten knopf bei einer der Kredite. | 
| Dann| Ich komme auf die /editcredit route. |

### Testfall Nummer 5

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich befinde mich auf der /edit route. | 
| Wenn| Ich ändere die Angaben zum Kredit und Speichere. | 
| Dann| Die Daten in der Datenbank werden akutalisiert. |

### Testfall Nummer 6

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich befinde mich auf der /edit route. | 
| Wenn| Ich ändere die Angaben zum Kredit und Speichere. | 
| Dann| Die Daten in der Datenbank werden akutalisiert. |

### Testfall Nummer 7

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich befinde mich auf der /home route. | 
| Wenn| Ich ändere die route manuel auf /edit | 
| Dann| Ich erhalte den fehler "Id parameter is required" |

### Testfall Nummer 8

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich befinde mich auf der /editcredit route. | 
| Wenn| Ich klicke auf Abbrechen. | 
| Dann| Die ansicht der route /credilist wird angezeight.  

### Testfall Nummer 9

|Zustand|Aktion|
|--------|---------|
| Gegeben| Ich befinde mich auf der /home route. | 
| Wenn| Ich ändere die URL auf /test . | 
| Dann| Ich erhalte den fehler "Keine Route für diese URL gefunden."  | 
