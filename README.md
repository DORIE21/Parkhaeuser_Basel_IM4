# Reflexion zur Datenwebseite der Parkhäuser Basel

Planung und Umsetzung
01.05.2024 Beginn und erste Verknüpfungen mit Github. Prototyping via Papier und dann Figma. Erste Auseinandersetzung mit der Darstellung, dem Storytellung im Zusammenhang mit dem Thema Parkhäuser. 02.05.2024 Verküpfung mit der Datenbank und Erstellung der DB Struktur anhand der Vorlesung. Danach haben wir unser Githubdesktop eingerichtet und uns für die Arbeit zuhause abgesprochen. 03.05.2024 In der ersten Blockwoche haben wir uns nach der Stoffvermittlung jeweils mit der Einrichtung vom Server und der Database beschäftigt. Wir vernetzten uns via Github desktop und starteten gegen Mitte der Woche mit dem Coden von zuhause aus. 08.05 langsames Starten mit dem Styling sprich CSS, HTML und JS Dateien. 17.05.2024 Beim Vorbereiten und Halten unseres Vortrags, ist uns irgendwie bewusst geworden, dass wir doch einiges verstanden haben. Auch wenn das ganze mühsame Styling noch bevor stand.

UX-Storytelling & Nutzen 
Man kennt dieses Szenario, wenn man sich in einer nicht vertrauten Stadt befindet und möglichst schnell ein Parkhaus suchen muss, dass kann rasch stressig werden. Unsere Webseite wurde aus einem simplen Grund zusammengestellt, nämlich ein vorhandenes Problem mit einer besseren Übersicht zu lösen. Die Stadt Basel hat rund 17 Parkhäuser. Wir haben uns die Frage gestellt: Wie können wir dieses Angebot für Besucher der Stadt Basel übersichtlicher machen? Als erstens haben wir uns eingegrenzt auf die fünf grössten Parkhäuser der Stadt Basel, aus dem einfachen Grund, wenn man Besucher ist, muss man nicht die Belegung aller 17 Parkhäuser wissen. Das gibt auch wieder eine vereinfachte Übersicht. Wir haben die fünf grössten Parkhäuser ausgewählt und mit den Daten der API die aktuelle Belegung der Einrichtungen zu geben, denn wenn es schnell gehen muss, ist das die beste Lösung dafür. Der Vorteil unserer Webseite liegt darin, dass man auch historische Daten von der vergangenen Woche begutachten könnte. 
Der Nutzen darin liegt, dass man schnell den geeigneten Parkplatz finden kann. Braucht man möglichst schnell ein Parkplatz, dann geht man in ein wenig belegtes Parkhaus. Sollte der Parkplatz möglichst nahe des Standortes seines Besuches sein, dann wählt man ein grösseres, dafür aber zentraleres Parkhaus. Aus diesem Grund lautet unser Claim: „Wir finden immer die passende Lücke für dich!“ 

Wichtige Quellen und Methoden zur Erweiterung unseres Programmierwissens waren für uns:

- Slides vom Unterricht: zur Einrichtung unseres Accounts und zur Orientierung zwischen den Programmen in der Startphase.

- Mitkommiliton*innen: z.B in der Einstellung der Login/Logout-Funktion oder um das Vier-Augen Prinzip anzuwenden.

- ChatGPT: z.B Bei diversen Ausführungen via Javascript, um mehr Möglichkeiten der Gestaltung durch CSS zu erhalten und YT Tutorials.

Reflexion und Learning allgemein:

API
Die Webseite und die API Anzapfung stellte uns vor ein paar Herausforderungen und Hürden, die jedoch mit viel Hingabe und Hilfe immer wieder überwunden werden konnten. Allen voran waren die Verbindungsprobleme mit dem Server zu Anfang, mit Filezilla konnten wir jedoch einiges einsehen und irgendwann klappte es dann. Dann hatten dur ein Tutorial das Programm mySQL Workbench heruntergeladen, dabei hätten wir von Anfang an nur mit dem Uniserver arbeiten können. Wir erfuhren von Nick, dass es eben sicherer ist mit PDO zu arbeiten. Also alles wieder auf Anfang. Wir änderten das mySQL wieder auf PDO was unserem Projekt zugute kam, jedoch wieder eine Menge Zeit in Anspruch nahm. Anyway, das nächste mal checken wir vorher besser nochmal alles ab bevor wir auf eigene Faust loslegen. Den SQL Befehl für die Datenbank mussten wir immer wieder anpassen. Zuerst zeigte er 6 anstatt 5 Parkhäuser an. Darin war auch noch Basel Bahnhof enthalten. Gerade der SQL der Startseite. Dieser wurde dann so angepasst dass er immer die gerade letzten Daten aus der Datenbank aufzeigte.

17-24.05 Finalisierungen und Korrekturen:
Chartslibrary und die Graphen
Für die Labels der Donut Charts brauchten wir ChartJS 2.0 statt 3.0...weil das Plugin nur für 2.0 funktioniert. Deshalb laufen die Donut charts mit version 2 und der Detail chart mit 3. Das ganze Styling gestaltete sich eher problematisch und bedurfte einigen Verzweifliungsversuchen. Besonders der Innenbereich sprich der Text der die Auslastungsangabe ausschreibt gestaltete sich dann immer komplizierter in der Programmierungsumsetzung. Um den Text einzuspeisen, musste ich die  die SQL query wie folgt verändern: SELECT *  FROM Parkheauser Basel WHERE id IN(SELECT MAX(id) FROM Parkheauser Basel GROUP BY Location ORDER BY created_at). Einsehbar unter der getCurrentData.php Datei. Wir entschieden uns deshalb, auf die Farbumsetzung zu verzichten und es schlicht zu belassen. Wir waren irgendwann froh, dass das nun funktioniert ;)

Mobile Version
Als die Responivität endlich passte, gefiel mir aber die Mobilversion noch überhaupt nicht. Ich fing an extra alles nochmal um zu disponieren um es auf dem Handy wesentlich anschaulicher zu machen. Im HTML habe ich dann eine Anweisung programmiert, dass bei mobilen Seiten eben nicht die Desktop Version genommen wurde. Leider ist dann der "hellbraune" Bereich vom Header nicht mehr da, aber das empfand ich eher als angenehm. Der Titel wurde kürzer und praktischer, da bei mobile first die Usability schlicht und einfach im Vordergrund steht. Die klaren Graphen (sowie die Teambiler) die nun untereinander ersichtlich sind, sind für unterwegs absolut selbsterklärend. Finden wir. Auch die Buttons mit 24h und 1 Woche habe ich untereinader angesetzt. 

Abschliessende persönliche Erkenntnisse: 
Früh starten, klar und deutlich miteinander sprechen, - nicht scheuen nochmal nachzufragen. 
Einander unterstützen - vier Augen sehen häufig mehr als zwei. 
Eine Nacht drüber schlafen hilft häufig auch. Einfach immer und immer wieder probieren und schauen was dabei rauskommt. 
"Untersuchen" ist oft gold wert beim Stylen. 
ChatGPT ist hilfreich aber sieht auch nicht alles - verstehen müssen wir es immer noch selbst.