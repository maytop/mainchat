<?php

// Sprachdefinition deutsch hilfe.php

$CHATHOSTNAME=$HTTP_HOST.dirname($PHP_SELF);
if (substr($CHATHOSTNAME,-1)!="/") $CHATHOSTNAME.="/";

$t['menue1']=	"�bersicht";
$t['menue2']=	"Liste aller Befehle";
$t['menue3']=	"Liste aller Spr�che";
$t['menue4']=	"$chat Hilfemen�";
$t['menue5']=	"Chatiquette";
$t['menue6']=	"Legende";
$t['menue7']=	"Punkte/Community/SMS";
$t['menue7b']=	"Punkte/Community";
$t['menue8']=	"AGB";
$t['menue9']=	"Datenschutz";

$t['hilfe0']=	"�bersicht �ber alle Befehle im Chat";
$t['hilfe1']=	"<B>Allgemeines Format:</B> /BEFEHL OPTION OPTION...";
$t['hilfe2']=	"<TH><DIV style=\"color:$farbe_text;\">Befehl</DIV></TH><TH><DIV style=\"color:$farbe_text;\">Funktion</DIV></TH><TH><DIV style=\"color:$farbe_text;\">Aliase</DIV></TH><TH><DIV style=\"color:$farbe_text;\">Anmerkungen</DIV></TH>";
$t['hilfe3']=	"Hilfe zu den voreingestellten Spr�chen";
$t['hilfe4']=	"�bersicht �ber alle voreingestellten Spr�che";
$t['hilfe5']=	"<TH WIDTH=15%><DIV style=\"color:$farbe_text;\">Spruch</DIV></TH><TH WIDTH=10%><DIV style=\"color:$farbe_text;\">Typ</DIV></TH><TH WIDTH=75%><DIV style=\"color:$farbe_text;\">Text</DIV></TH>";
$t['hilfe6']=	"$chat �bersicht";
$t['hilfe7']=	"Bei Fragen oder Anregungen wenden Sie sich bitte an <A HREF=\"MAILTO:$webmaster\">$webmaster</A>.";
$t['hilfe8']=	"Zus�tzliche Befehle f�r Admins";
$t['hilfe9']=	"Chatiquette";
$t['hilfe10']=	"Legende";
$t['hilfe11']=	"Community: Punkte, Profil, Mail, Freunde und Homepage";
$t['hilfe12']=	"<B>Weitere Hilfe zu den Punkten</B>";
$t['hilfe13']=	"Datenschutzrichtlinien (Privacy Policy) der fidion GmbH, Betreiber des mainChats";
$t['hilfe14']=	"Chat AGB";
$t['hilfe15']=	"Automatischer Logout";
$t['hilfe16']=	"<P>Sie wurden automatisch aus dem $chat ausgelogt, weil Sie %zeit%&nbsp;Minuten lang nichts geschrieben haben!</B></P>";

$t['sonst1']=	"Fenster schlie�en";

// Ausf�hrlicheHilfstext f�r die interaktive Hilfe

$hilfe_befehlstext=array(1=>	"/user\tListet alle User im aktuellen Raum\t/wer, /who, /w, /list",
				"/user RAUM\tListet alle User im Raum RAUM auf (*=Alle)\t/wer, /who, /w, /list\tFalls RAUM=*, werden alle R�ume gezeigt.",
				"/raum\tListet alle offenen R�ume auf\t/channel, /go",
				"/raum RAUM\tWechselt in RAUM. Falls RAUM nicht existiert, wird er als tempor�rer Raum neu angelegt\t/channel, /go",
				"/raum RAUM !\tWechselt in RAUM, auch wenn der Raum geschlossen ist (nur Admins und Raumbesitzer)\tforce, immer\tBitte Privatsph�re beachten!",
				"/people\tListet alle offenen R�ume mit Usern auf.",
				"/weg\tSetzt oder l�scht einen ich-bin-nicht-da Text.\t/away\tBeispiel: /away ich telefoniere",
				"/msg NAME TEXT\tTEXT an User NAME fl�stern\t/talk, /tell, /t\tDie �bermittlung ist privat und kann von niemandem mitgelesen werden",
				"/msgf TEXT\tTEXT an alle Freunde fl�stern\t/tf",
				"/mail NAME TEXT\tSchreibt Mail mit dem Inhalt TEXT an den User NAME\t/m\tDer Betreff entspricht den ersten Worten",
				"/me TEXT\tSpruch an alle im Raum<br>Kommentar in die Runde\t/txt\tDer Text wendet sich nicht an einen bestimmten User, sondern ist f�r alle im Raum bestimmt",
				"/op TEXT\tRuft einen Admin\t \tDer Text wird an die Admins geschickt, die gerade online sind",
				"/nick NAME\tSetzt Nickname auf NAME\t/name\tDer neue Nickname wird dauerhaft gespeichert",
				"/ignoriere\tZeigt die ignorierten User an\t/ignore, /ig",
				"/ignoriere NAME\tIgnoriert User NAME\t/ignore, /ig\tNochmalige Eingabe gibt den User NAME wieder frei",
				"/kick NAME\tSperrt User NAME aus dem aktuellen Raum dauerhaft aus\t/plop\tNochmalige Eingabe gibt den Eintritt f�r diesen User wieder frei",
				"/quit TEXT\tBeendet den Chat mit den Worten TEXT (logoff).\t/exit, /ende\tDie Angabe von TEXT ist optional",
				"/hilfe\tListet die Kurzhilfe auf\t/help, /?",
				"/freunde NAME\tMacht NAME zu meinem Freund\t/freund, /buddy\tNochmalige Eingabe nimmt NAME aus der Freundesliste",
				"/einlad NAME\tL�dt einen User in den Raum ein\t/invite\tNur f�r Admins oder Raumbesitzer",
				"/uebergeberaum NAME\t�bergibt den aktuellen Raum an den User NAME.\t/schenke\tNur f�r Admins oder Raumbesitzer",
				"/aendereraum STATUS\t�ndert den Status des aktuellen Raums auf offen, geschlossen oder moderiert.\t \tNur f�r Admins oder Raumbesitzer",
				"/loescheraum RAUM\tL�scht den angegebenen Raum\t \tNur f�r Admins oder Raumbesitzer",
				"/zeige NAME\tGibt die Benutzerinformationen f�r den Benutzer NAME aus <BR>(% ist Joker).\t/whois",
				"/wuerfel\tW�rfel werfen\t/dice\t/wuerfel 2W6 <BR>wirft 2 sechseitige W�rfel",
				"/suche NAME\tSucht alle Spr�che, die das Wort NAME enthalten\t/such\tGut geeignet, um einen Spruch passend zum Thema zu finden",
				"=spruch NAME ZUSATZ\tGibt einen vordefinierten Spruch aus (Siehe \"Liste aller Spr�che\")\t \tNAME und ZUSATZ ist optional und vom Spruch abh�ngig. Weitere Info vorhanden",
				"*TEXT*\tTEXT wird kursiv dargestellt\t \tWirkt in allen Texten, die �ffentlich oder privat im Chat ausgegeben werden",
				"_TEXT_\tTEXT wird fett dargestellt\t \tWirkt in allen Texten, die �ffentlich oder privat im Chat ausgegeben werden",
				"/time \tGibt die aktuelle Uhrzeit aus",
				"/farbe\tZeigt die aktuelle Farbe an\t/color",
				"/farbe RRGGBB\tSetzt neue Farbe auf RRGGBB\t/color\tRR steht f�r Rot, GG f�r Gr�n und BB f�r Blau, jeweils von 00 bis FF",
				"/farbealle \tSetzt/zeigt die Farbe f�r andere User an\t/color2\tWerte in RRGGBB wie bei /farbe; abschalten mit \"/farbealle -\"",
				"/farbenoise \tSetzt/zeigt die Farbe f�r Noises\t/color3\tWerte in RRGGBB wie bei /farbe; abschalten mit \"/farbenoise -\"",
				"/farbepriv \tSetzt/zeigt die Farbe f�r private Nachrichten\t/color4\tWerte in RRGGBB wie bei /farbe; abschalten mit \"/farbepriv -\"",
				"/farbesys \tSetzt/zeigt die Farbe f�r Systemnachrichten im Chat\t/color5\tWerte in RRGGBB wie bei /farbe; abschalten mit \"/farbesys -\"",
				"/farbebg \tSetzt/zeigt die Farbe f�r den Hintergrund. �nderung wird erst nach neuem Laden aktiv.\t/color6\tWerte in RRGGBB wie bei /farbe; abschalten mit \"/farbebg -\"",
				"/farbset X\tSetzt das vordefinierte Farbset X. \t \tDie m�glichen Farbsets werden durch /farbset angezeigt. Beispiel: /farbset 3",
				"/farbreset \tSetzt die Farbspielereien wieder zur�ck auf den Chat-Default",
				"/clearedit \tEingabezeile nach Return l�schen oder stehen lassen\t \tNochmalige Eingabe schaltet wieder zur�ck");

$hilfe_befehlstext_admin_ok=1;
$hilfe_befehlstext_admin=array(1=>"/besitzeraum RAUM\t�bernimmt Besitz von RAUM\t/besitze\tNur f�r Admins",
			"/raum RAUM !\twechselt in RAUM, auch wenn der Raum geschlossen ist (nur Admins und Raumbesitzer)\t force, immer\tBitte Privatsph�re beachten!",
			"/schubs USER [raum]\tbef�rdert USER in RAUM\t\tNur f�r Admins",
			"/knebel\tKnebelt einen User\t/gag\t/gag idiot 10",
			"/gaga\tWie /gag, jedoch Anzeige aller im Chat geknebelten, nicht nur im eigenen Raum",
			"/einlad\tBearbeitet die geladenen User\t/invite\t/invite dilbert",
			"/zeige\tZeigt erweiterte Daten eines Users (% ist Joker)\t/whois\t/whois dilbert",
			"/analle TEXT\tTEXT an alle User fl�stern, die online sind\t/toall\tNur f�r Admins",
			"/op\tPrivatnachricht an alle eingeloggten Admins\t\t/op tach.",
			"/oplist\tAuflisten aller eingeloggten Admins\t\t/oplist",
			"/lob USER PUNKTE\tLobt User: Er erh�lt Punkte gutgeschrieben\tDie Angabe von PUNKTE ist optional\t",
			"/tadel USER PUNKTE\tTadelt User: Er erh�lt Punkte abgezogen\tDie Angabe von PUNKTE ist optional\t/bestraf",
			"/blacklist USER\tSetzt User auf die Blacklist oder l�scht ihn\t\t/blackliste",
			"/ip USER<br>/ip w.x.y.z\tZeigt die User zu einer IP\t\t",
			"/dupes\tZeigt doppelt eingeloggte User\t\t/dupes");


$hilfe_uebersichtstext=	"<p><b>Erste Hilfe bei Problemen:</b><br>".
			"Falls Sie im Chat keinen Text angezeigt bekommen oder von Zeit zu Zeit aus dem Chat fliegen, ".
			"k�nnen Sie in den <b><A HREF=\"hilfe.php?http_host=$http_host&id=$id&f[u_backup]=1\">sicheren Modus</a> umschalten</b>! Sie k�nnen ".
			"nat�rlich wieder in den <b><A HREF=\"hilfe.php?http_host=$http_host&id=$id&f[u_backup]=0\">Normalmodus</a> zur�ckschalten</b>. ".
			"Falls die <b>Ausgabe h�ngt</b> oder andere Fehler auftreten, k�nnen Sie mit ".
			"<b><A HREF=\"hilfe.php?http_host=$http_host&id=$id&reset=1\">[RESET]</a></b> ".
			"alle Fenster des Chats neu laden.</p>".

			"<p><b>Popup-Blocker:</b><br>".
			"Bitte beachten Sie, dass Popup-Blocker die Funktionalit�t des Chats beeintr�chtigen k�nnen ".
			"und bei eingeschaltetem Popup-Blocker einige Funktionen nicht nutzbar sind. ".
			"Wir empfehlen Ihnen daher f�r den $chat den Popup-Blocker zu deaktivieren.</p>".


			"<p><b>JavaScript:</b><br>".
			"Bitte beachten Sie, dass die Bedienung des Chats mit JavaScript einfacher ist und schalten ".
			"Sie dieses bitte gegebenenfalls in Ihrem Browser ein.</p>".

			"<p><b>Befehle:</b><br>".
			"Die meisten Einstellungen k�nnen durch <A HREF=\"hilfe.php?http_host=$http_host&id=$id&aktion=befehle\">".
			"<B>Befehle im Chat</B></A> oder direkt im ".
			"Fenster (<A HREF=\"edit.php?http_host=$http_host&id=$id\"><B>Einstellungen</B></A>, ".
			"<A HREF=\"raum.php?http_host=$http_host&id=$id\"><B>R�ume</B></A>) ver�ndert werden. F�r die voreingestellten Spr�che, ".
			"die im Chat abgerufen werden k�nnen, gibt es noch eine <A HREF=\"hilfe.php?http_host=$http_host&id=$id&aktion=sprueche\">".
			"<B>�bersicht</B></A>.</p>".

			"<p><b>Liste:</b><br>".
			"Im Chat, wie auch im Fenster (<A HREF=\"edit.php?http_host=$http_host&id=$id\"><B>Userliste</B></A>), ".
			"kann eine Liste aller in einem bestimmten ".
			"Raum chattenden User ausgegeben werden. Im Fenster ist es dar�ber hinaus m�glich, ".
			"weitere Informationen abzufragen oder dem User eine private Nachricht zu schreiben.</p>".

			"<p><b>Namen:</b><br>".
			"Jeder User im Chat hat einen Usernamen und einen Nicknamen. ".
			"Mit beiden Namen ist der Login m�glich; im Chat wird aber nur der Nickname angezeigt. ".
			"Der Nick darf keine Leerzeichen enthalten. Nick- wie auch Usernamen sind eindeutig, ".
			"also kann es keine zwei Benutzer mit demselben Namen geben.".
			"</p>".

			"<p><b>Erg�nzung des Nicks:</b><br>".
			"Andere Benutzer k�nnen im Chat durch den Beginn des Nicks, gefolgt von einem Doppelpunkt, ".
			"gezielt angesprochen werden.<br>".
			"<b>Aus dil: Hallo!</b> wird beispielsweise <b>[zu Dilbert] Hallo!</b><br>".
			"Die Nickerg�nzung funktioniert unter anderem beim Chatten und beim Fl�stern. ".
			"Ein @ vor dem Beginn des Nicknamens wird ebenfalls zum vollen Nick erg�nzt.</p>".

			"<p><b>Einstellungen:</b><br>".
			"Jeder User kann optional eine E-Mail-Adresse und eine Homepage eintragen, ".
			"die in der Userliste im Fenster angezeigt werden. Neben dem Passwort, das neu gesetzt werden kann, ".
			"ist auch der Wechsel der Farbe durch Klick auf eines der bunten Felder m�glich.".
			"<br>Zudem kann jeder User seine Systemeintrittsnachricht und -austrittsnachricht in den Raum �ndern. (Dies ".
			"muss vom Chatbetreiber freigeschaltet sein.) Um hier automatisiert den eigenen Nicknamen einzutragen, kann man ".
			"<b>%nick%</b> eintragen. Um automatisiert den Raumnamen einzutragen, ist <b>%raum%</b> einzutragen. <br>".
			"Weiterhin kann man, soweit im Chat die entsprechenden Features aktiviert sind, die Anzeige seines eigenen ".
			"Punktew�rfels unterdr�cken, die Anzeige der Smilies deaktivieren oder die Anzeige der Ein-/Austrittsnachrichten ".
			"unterdr�cken.".
			"</p>".

			"<p><b>R�ume:</b><br>".
			"Zum Wechsel in einen offenen Raum w�hlt man einfach den passenden Raum im Auswahlfeld ".
			"unter dem Chat-Eingabefeld aus. Hinter dem Raumnamen wird die Anzahl der User angezeigt, ".
			"die aktuell in diesem Raum chatten. Jeder User kann beliebig viele R�ume aufmachen, ".
			"die er ver�ndern darf. Nicht-permamente R�ume werden aber automatisch nach Verlassen gel�scht. ".
			"Ein Besitzer eines Raums oder ein ChatAdmin darf den Raum umbenennen und den Ein- und ".
			"Austrittstext sowie den Raumstatus ver�ndern. Einen offenen Raum darf jeder User betreten, ".
			"w�hrend ein geschlossener Raum nicht betreten werden darf und auch nicht angezeigt wird. ".
			"Ein Raum darf gel�scht werden; aber falls sich User darin aufhalten, werden diese in die Lobby geleitet. ".
			"Mit dem Befehl /kick k�nnen im Chat unerw�nschte User aus einem Raum entfernt und der Wiedereintritt ".
			"automatisch damit verboten werden.".
			"</p>".

			"<p><b><A HREF=\"user.php?http_host=$http_host&id=$id&aktion=chatuserliste\" TARGET=\"userliste\">Userliste</A>".
			" im rechten Fenster neben dem Chat (@ > USERNAME)</b><br>".
			"In der Userliste werden die Nicknamen aller User, die im aktuellen Raum online sind, ".
			"angezeigt. Das @ vor dem Nicknamen kopiert den Nicknamen in die Chat-Eingabezeile. ".
			"Dies ist sehr praktisch, um einen User <b>�ffentlich</b> direkt anzusprechen. ".
			"Das > (Gr��er) vor den Nicknamen kopiert den Nicknamen in die Chat-Eingabezeile, ".
			"um diesen User <b>privat</b> anzufl�stern. Falls ein Nick in Klammern () steht, ist der ".
			"User gerade abwesend (/away). Ein Admin sieht vor dem Nick zus�tzlich drei ".
			"Links <b>G K S</b> zur Ausf�hrung der Befehle Gag (Knebel), Kick (Herauswurf) und ".
			"Sperre im Chat. Ein Raumbesitzer sieht nur den Link auf Kick.</p>".

			"<p><b><A HREF=\"smilies.php?http_host=$http_host&id=$id\" TARGET=\"userliste\">Smileys-Liste</A>".
			" im rechten Fenster neben dem Chat</b><br>".
			"Das Fenster der Userliste kann auf eine Liste mit h�ufig benutzten Smileys umgeschaltet werden. ".
			"Ein Klick auf den Smiley kopiert ihn in die Eingabezeile. Sie k�nnen in Ihren Einstellungen ".
			"die Darstellung der Smileys als Grafiken unterdr�cken. In jedem Raum lassen sich ebenfalls ".
			"die Grafiken unterdr�cken (Smileys-Grafiken werden nur in ausgew�hlten mainChats angeboten).</p>".

			"<p>".
			"<b>Moderationsmodul f�r PromiChats (nur in ausgew�hlten mainChats)</b>".
			"<ul>".
			"<li>In moderierten R�umen kann ein moderierter Chat stattfinden. Alle �ffentlichen Nachrichten werden ".
			"unterdr�ckt und an einen oder mehrere Moderatoren weitergeleitet, solange sich Moderatoren im Raum aufhalten. ".
			"<li>Die Moderatoren w�hlen eine oder mehrere Fragen aus und beantworten diese. Nach Beantwortung der Fragen werden".
			" diese mit der Antwort im Chat ver�ffentlicht. ".
			"<li>F�r die Moderatoren steht eine eigene Benutzeroberfl�che in HTML zur Verf�gung, mit der die Fragen der User schnell".
			" und komfortabel durchgeschaltet, beantwortet oder unterdr�ckt werden k�nnen. ".
			"<li>Die Fragen, die ein Moderator zur Beantwortung ausgew�hlt hat, sind f�r alle anderen Moderatoren gesperrt. ".
			"<li>�ffentliche Ein- und Austrittsnachrichten werden in moderierten R�umen unterdr�ckt. ".
			"<li>Die Moderationsfunktionen sind nur in den R�umen aktiv, die auf den Status \"moderiert\" gesetzt sind.".
			"</ul>".
			"</p>";

$chatiquette="
<p><b>CHATIQUETTE im mainChat</b></p>

<p><b>Wie melde ich mich an? </b></p>
<p>Wenn man den Chat als Gast betritt, sollte man sich sofort einen Namen zulegen (/nick name), da die meisten User sich nur 
ungerne mit einer (austauschbaren) Zahl unterhalten. Im realen Leben wird man ja auch mit seinem Namen angesprochen. �ber den
Namen ist man leichter ansprechbar und unverwechselbar.
Merkt man nach einiger Zeit, dass man �fter in den Chat kommen m�chte, empfiehlt es sich, einen festen Account (Nicknamen) 
zuzulegen. Nat�rlich kann man das auch gleich machen, damit ist der Name dann besetzt und kein anderer kann sich mehr so
nennen. Hierzu klickt man auf der Startseite auf >>neu anmelden<< und best�tigt die Anmeldung, die per Mail zugesandt wird.
Dann w�hlt man sich seinen Chatnamen und sein Zugangspasswort aus.
</p>

<b><p>Wie verhalte ich mich im Chat richtig, wenn ich zum ersten Mal reingehe? </p></b>

<p>Zuerst verschafft man sich am besten eine �bersicht �ber die Situation im Chat. 
Wieviele User und Admins anwesend sind, welche Gespr�che laufen, 
welche Stimmung allgemein herrscht und wie die User miteinander umgehen. </p>

<p>Um ins Gespr�ch einzusteigen, spricht man am besten jemanden direkt an (name: text) 
oder man gibt ein allgemeines Statement zu einem Thema ab und wartet dann, bis jemand auf einen eingeht.
Dann ist das Chatten nicht mehr schwer. </p>

<b><p>Was ist ein Admin? </p></b>
<p>Admin hei�t Administrator (=\"Verwalter\")<br>
Admins im mainChat haben die Aufgabe, daf�r zu sorgen, dass sich alle wohl f�hlen.
Sie beantworten gerne Fragen zum Chat, helfen bei Problemen und werfen User aus dem Chat, 
wenn diese andere bel�stigen.</p>

<p>Administrative T�tigkeit ist Freizeit, die nicht bezahlt wird. 
Deswegen kann nicht gew�hrleistet werden, dass immer ein Admin zur Stelle ist. 
Allerdings kennen sich viele Stammuser genauso gut aus und beantworten oft auch gerne Fragen, 
falls die Admins kurzfristig nicht anwesend oder ansprechbar sind. 
</p>


<b><p>K�nnen Admins private Nachrichten mitlesen? </p></b>

<p>Immer wieder tauchen im Chat Leute auf, die behaupten, Admins k�nnten alle privaten Mitteilungen lesen.
Abgesehen davon, dass wir das moralisch nicht vertreten k�nnten, ist es technisch auch nicht vorgesehen.
Private Nachrichten im Chat werden nach einigen Sekunden automatisch wieder gel�scht und *nicht* mitgeloggt, das hei�t im 
Klartext:<br>
<b>Nein, k�nnen sie nicht.</b> </p>

<b><p>Bin ich im mainChat anonym? </p></b>
<p>
Ja und Nein.<br>
Man ist anderen Usern gegen�ber anonym; Admins jedoch k�nnen die IP-Adresse des Rechners, mit dem man online ist, sehen. 
Das muss auch so sein, damit bei Vorf�llen, wie zum Beispiel Beleidigungen, gehandelt werden kann.
Benimmt sich jemand dauerhaft daneben und es ist nachvollziehbar, von welchem Provider er kommt, ist es auch kein Problem, 
sich an den Provider zu wenden und zu beschweren. Die meisten Provider reagieren empfindlich auf solchen Missbrauch und 
sperren den Zugang.</p>


<b><p>Was sollte ich im Chat grunds�tzlich nicht tun? </p></b>
<p>Alles, was ich im realen Leben auch nicht tun w�rde.<br>
Ich gehe nicht in eine Kneipe und p�bele sofort die Leute an, dann kommt der Wirt und wirft mich raus.
Ich gehe auch nicht auf eine Party und baggere die weiblichen G�ste an, dann wollen sie meist schnell nicht mehr mit mir reden.
Ich frage nicht sofort jeden aus, auch wenn ich �ber ihn viel wissen m�chte, sondern ich warte, bis sich das von selbst ergibt: vielleicht,
indem ich ein bisschen von mir erz�hle.
Kurz gesagt: Ich benehme mich h�flich, respektvoll und nicht zu aufdringlich. </p>

<b><p>Wann werde ich von den Admins aus dem Chat geworfen?</p></b> 
<p>
Admins haben das Recht, User aus dem Chat zu werfen (\"kicken\"), wenn diese sich daneben benehmen.<br>
Davon wird meist, au�er in Extremf�llen, erst nach einer Vorwarnung Gebrauch gemacht. Sieht ein User nicht ein, dass er sich 
besser benehmen sollte, kann er auch gesperrt werden. In dem Fall wird die IP (Rechner-Adresse) blockiert, so dass sich der 
Betreffende nicht mehr in den Chat einloggen kann. Bei wiederholten Verst��en wird der Provider / die Bildungseinrichtung 
informiert und der User muss mit entsprechenden Konsequenzen rechnen. 
</p>
<b>Gr�nde zum Kicken sind: </b>
<p>
<BR>
<b>P�beleien.</b> Jemanden zu beleidigen, den man gar nicht kennt, ist wenig stilvoll und wird nicht geduldet. Bei extremen 
Vorf�llen (dies gilt auch f�r die Verbreitung nationalsozialistischen Gedankenguts oder von Sex-Urls) wird ohne Vorwarnung
gekickt.
<BR><BR>
<b>Schreiben</b> nur mit Gro�buchstaben. Das bedeutet, auf die Realit�t bezogen, lautes Schreien und ist wenig erw�nscht. 
Wenn etwas betont werden soll, kann man es auch kursiv (*) oder fett (_) darstellen. Ganze S�tze sollte man jedoch nicht betonen; das gilt als unfein. 
</p>
";


$legende="<tr bgcolor=#E8E8FF><td colspan=\"2\"><p><b>Wieviele Chat-Punkte ergeben welchen W�rfel?</b> </p></td></tr>".
	"<tr bgcolor=#D8D8EE><td>&nbsp;<img src=\"pics/gruppe1.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 1.000 - 9.999 Punkte</td></tr>".
	"<tr bgcolor=#E8E8FF><td>&nbsp;<img src=\"pics/gruppe2.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 10.000 - 99.999 Punkte</td></tr>".
	"<tr bgcolor=#D8D8EE><td>&nbsp;<img src=\"pics/gruppe3.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 100.000 - 199.999 Punkte</td></tr>".
	"<tr bgcolor=#E8E8FF><td>&nbsp;<img src=\"pics/gruppe4.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 200.000 - 299.999 Punkte</td></tr>".
	"<tr bgcolor=#D8D8EE><td>&nbsp;<img src=\"pics/gruppe5.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 300.000 - 499.999 Punkte</td></tr>".
	"<tr bgcolor=#E8E8FF><td>&nbsp;<img src=\"pics/gruppe6.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 500.000 - 749.999 Punkte</td></tr>".
	"<tr bgcolor=#D8D8EE><td>&nbsp;<img src=\"pics/gruppe7.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 750.000 - 999.999 Punkte</td></tr>".
	"<tr bgcolor=#E8E8FF><td>&nbsp;<img src=\"pics/gruppe8.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 1.000.000 - 4.999.999 Punkte</td></tr>".
	"<tr bgcolor=#D8D8EE><td>&nbsp;<img src=\"pics/gruppe9.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: 5.000.000 - 9.999.999 Punkte</td></tr>".
	"<tr bgcolor=#E8E8FF><td>&nbsp;<img src=\"pics/gruppe10.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>User: ab 10.000.000 Punkten</td></tr>".
	"<tr bgcolor=#D8D8EE><td colspan=\"2\"><p><b>Weitere Symbole:</b> </p></td></tr>".
	"<tr bgcolor=#E8E8FF><td>&nbsp;<img src=\"pics/haeuschen.gif\" width=\"12\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>Homepage des Users</td></tr>".
	"<tr bgcolor=#D8D8EE><td>&nbsp;<img src=\"pics/mail.gif\" width=\"17\" height=\"12\" alt=\"\" border=\"0\"><br></td><td>E-Mail des Users</td></tr>";

$hilfe_community="<BR>
<TABLE ALIGN=RIGHT CELLPADDING=2 CELLSPACING=0 BORDER=0 BGCOLOR=$farbe_tabelle_kopf>
".$legende."
</table>
<P><b><A NAME=\"punkte\">Punkte</A></b><BR>
Unter dem Chat-Men�punkt \"<B>USER</B>\" f�hrt der Link zur User Top10/100 Liste. 
Alle angemeldeten User bekommen pro einzelnes im Chat geschriebenes Wort
einen Punkt. Die Voraussetzung ist, dass jedes Wort mindestens vier Buchstaben hat
und sich der User in einem �ffentlichen, permanenten Raum mit mindestens 
".$punkte_ab_user." Usern befindet. F�r das
erstmalige Ausf�llen des Profils bekommt jeder User 500 Punkte. Die Admins
haben ferner die M�glichkeit, den Usern Punkte zu schenken oder abzuziehen.
Dies geschieht mit den Befehlen \"<B>/lob Nickname Punktezahl</B>\" und \"<B>/tadel
Nickname Punktezahl</B>\". Wenn Sie dem User Heinz also 100 Punkte schenken
m�chten, tippen Sie im Chat einfach \"/<B>lob Heinz 100</B>\" ein und schon bekommt
der User Heinz 100 Punkte gutgeschrieben. Beim Logout des Users werden die
Punktezahlen jeweils aufaddiert und aktualisiert. Mit Klick auf den
Men�punkt Top10/100 kann jeder User Einblick in die Rangliste nehmen. Je
nach Anzahl der Punke erh�lt jeder User (sowie auch die Admins) ein
kleines W�rfelsymbol, das seinem Nicknamen im Chat zugeordnet wird.<BR><BR>
<B>Tipp 1:</B> Die Punkte werden meistens erst beim Logout aufs Userkonto gutgeschrieben,
daher gibt's erst nach dem Login einen W�rfel mit mehr Augen.<BR>
<B>Tipp 2:</B> Wer um Punkte bettelt, macht sich unbeliebt.<BR>
<B>Tipp 3:</B> Wer in leeren R�umen Texte schreibt, um die Punkte nach oben zu
treiben, hat schnell keine Punkte mehr.<BR><BR>
<b><A NAME=\"profil\">Profile</A></b><br>
Unter dem Punkt \"<B>EINSTELLUNGEN</B>\" kann ebenfalls jeder Einblick in sein Profil
nehmen und es gegebenenfalls �ndern. Hier kann der User Angaben �ber seine
Anschrift, Telefon-, Handynummer, ICQ, Geburtsdatum, Geschlecht, Hobbys und
vieles mehr hinterlassen. Diese Profile sind im Chat �ffentlich abrufbar.
Das Ausf�llen der Profile ist f�r die User freiwillig. Admins haben in Ihrem
eigenen Profil noch die M�glichkeit, sich die Profile aller User ausgeben zu
lassen.<BR><BR>
<b><A NAME=\"mail\">Chat-Mail</A></b><br>
Die Chat-Mail (<B>MAIL</B>, <B>/mail</B>) ist eine im Chat integrierte Mailbox mit
Weboberfl�che. Im Chat selbst steht hinter jedem Nick ein Mailsymbol (blauer
Briefumschlag). Somit kann jeder registrierte User im Chat anonym Mail
empfangen, ohne seine echte Adresse herauszugeben. Um in das Mail-Men� zu
gelangen, klicken Sie in der unteren Chatleiste auf den Men�punkt Mail. Nun
�ffnet sich ein neues Fenster, in dem Sie Ihre Webmail-Oberfl�che finden.
Hier k�nnen Sie direkt alle Ihre empfangenen Nachrichten sehen und per Klick
auf die Betreffzeile �ffnen. Wenn Sie Nachrichten zum L�schen in den
Papierkorb verschieben m�chten, markieren Sie einfach die betreffende Mail
durch Klick in das \"<B>L�schen</B>\"-K�stchen und klicken Sie dann auf den
<B>L�schen</B>-Button rechts unter den Nachrichten.<BR>
Gel�schte Nachrichten werden automatisch nach einer gewissen Zeit aus dem Papierkorb
gel�scht. (Standardeinstellung 14 Tage, kann aber vom Chatbetreiber ge�ndert werden)<BR><BR>
<B>Im Mailmen� haben Sie nun folgende Auswahlm�glichkeiten:</B></P>
<UL>
<li><I>Mailbox neu laden</I>
<li><I>Neue Mail schreiben</I>
<li><I>Papierkorb zeigen</I>
<li><I>Papierkorb leeren</I>
</ul><P>
Um eine neue Mail zu verfassen, geben Sie unter dem Punkt \"<B>Neue Mail senden</B>\"
in das Feld \"<B>Nickname</B>\" den Nicknamen des Users ein, dem Sie eine Nachricht
zukommen lassen m�chten und klicken Sie dann auf \"<B>weiter</B>\". Nun befinden Sie
sich in der Texteingabe f�r Ihre Mail. Am Fu�e der Box k�nnen Sie �brigens
ausw�hlen, ob Sie die Nachricht an die Chat-interne Mailbox des Users oder
an seine regul�re E-Mail Adresse schicken m�chten, sofern der User diese als
�ffentlich in seinem Chatprofil angegeben hat. Sind Betreff und Textfeld
fertig ausgef�llt, verschicken Sie die Mail mit Klick auf den
\"<B>Senden</B>\"-Button. Wenn Sie eine empfangene Mail l�schen, so wird sie zuerst
einmal in den Papierkorb verschoben. Durch Klick auf den Men�punkt
\"<B>Papierkorb zeigen</B>\" k�nnen Sie sich alle zum L�schen vorgesehenen Mails noch
einmal anschauen. Wenn Sie nun sicher sind, dass sie auch alle im Papierkorb
befindlichen Mails l�schen wollen, klicken Sie auf \"<B>Papierkorb leeren</B>\".<BR><BR>
<b><A NAME=\"freunde\">Freunde</A></b><br>
Bei den Freunden (<B>EINSTELLUNGEN</B>, <B>/freunde</B>) k�nnen Sie einfach andere User im
Chat zu Freunden erkl�ren oder aber aus der Freunde-Liste l�schen. So wird
man stets �ber den Login/Logoff oder die Anwesenheit von Freunden im Chat
informiert. Die Freunde-Liste ruft der Chatter �ber den Punkt \"<B>USER</B>\" direkt
im Chat auf. Es erscheint ein Fenster, in dem sich auch das Main-Chat Men�
befindet. Durch Klicken auf \"<B>meine Freunde</B>\" gelangt man nun auf die Liste
und kann ersehen, wen man sich als Freund eingetragen hat oder von wem man
selbst als Freund aufgenommen wurde.<BR><BR>
<b><A NAME=\"aktionen\">Aktionen</A></b><br>
�ber den Men�punkt \"<B>EINSTELLUNGEN</B>\" im Chat gelangen Sie zu den sogenannten
\"<B>Aktionen</B>\". Mit den Aktionen steuern Sie, bei welchen Ereignissen Sie mit
welcher Nachricht informiert werden wollen. Ein Ereignis ist z.B. der Login
oder Logout eines Freundes oder auch der Eingang einer neuen Mail. Wann Sie
die Nachricht erhalten wollen, w�hlen Sie aus der obersten Zeile aus.
M�glich ist der Empfang sofort wenn Sie online sind (<B>Sofort/Online</B>) (z.B.
Freund loggt ein/aus oder zu dem Moment, in dem Sie eine neue Mail
erhalten), bei Ihrem Login in den Chat oder regelm��ig <B>alle 5 Minuten</B>
(regelm��ige Information �ber die vorliegenden neuen Mails oder die
Anwesendheit Ihrer Freunde im Chat) Die Benachrichtigungen, die Sie
erhalten, wenn Sie nicht im Chat sind (offline), w�hlen Sie unter
<B>Sofort/Offline</B> aus. Die Art der Nachricht ist einstellbar: so gibt es <B>keine</B>
Benachrichtigung, <B>Chat-Mail</B> (chat-interne Mail), eine <B>E-Mail</B> an Ihre
nicht-�ffentliche E-Mail Adresse oder eine <B>OLM</B> (OnLineMessage, direkte
Nachricht in Chat wie /msg). Zus�tzlich sind auch Kombinationen von E-Mail
und OLM sowie Chat-Mail und OLM m�glich, wobei Sie in diesem Fall zwei
Nachrichten erhalten.<BR><BR>
<b><A NAME=\"home\">User-Homepages</A></b><br>
Unter dem Punkt \"<B>EINSTELLUNGEN -> Homepage</B>\" kann ebenfalls jeder User mit
wenigen Klicks seine eigene kleine Homepage erstellen, ohne jegliche
HTML-Kenntnisse zu besitzen. Nach der \"<B>Freischaltung</B>\" der Homepage wird hinter dem 
Nicknamen ein <B>Haus-Symbol</B> angezeigt, �ber das man sich die Homepage ansehen kann. In der 
\"Suche nach Usern\" (<B>USER -> Suche</B>) ist die gezielte Suche nach Usern mit freigeschalteter Homepage
m�glich.<BR><BR>
Ihre Homepage kann nat�rlich auch mit folgender Adresse von au�erhalb des Chats abgerufen werden:<BR>
<B>http://".$CHATHOSTNAME."home.php/NICKNAME</B><BR><BR>
Grunds�tzlich immer dargestellt werden</P>
<ul>
<li><I>Nickname des Users</I>
<li><I>Onlinezeit</I>
<li><I>Userlevel</I>
<li><I>Punkte</I>
</ul><P>

Weiter kann der Chatuser entscheiden:</P>
<UL>
<li><I>welche Daten aus seinem Userprofil auf der Homepage dargestellt werden sollen.</I>
</UL>
<P>
<P>Au�erdem hat er der die M�glichkeit:</P>
<UL>
<li><I>Schrift-, Hintergrund- und Linkfarben sowie Hintergrundbilder f�r seine Homepage zu bestimmen,</I>
<li><I>beliebige Texte (auch mit HTML) in das Textfeld einzugeben,</I>
<li><I>Bilder von seinem eigenen Rechner hochzuladen und in seine Homepage einzuf�gen.</I>
</UL>
</P>";


$hilfe_communitysms="

<p><b><A NAME=\"sms\">SMS-Benachrichtigungsfunktion</A></b></p>

<p>Diese Funktion ist eine reine Benachrichtigungsfunktion, d.h. 
User im Chat k�nnen nun auch <b></b>SMS direkt aus dem Chat auf das Handy 
von anderen Chat-Usern</b> schicken und sich �ber die \"Aktionen\" 
im Chat per SMS informieren lassen. 
(Mit den Aktionen steuern Sie, bei welchen Ereignissen Sie mit welcher Nachricht 
informiert werden wollen. Ein Ereignis ist z.B. der Logon oder Logout eines 
Freundes, oder auch der Eingang einer neuen Mail. Mehr hierzu unter EINSTELLUNGEN / AKTIONEN)

</p> 


<p>Die SMS-Funktion ist mit den Community-Funktionen gekoppelt, 
d.h. sie kann nur genutzt werden, wenn in Ihrem Chat auch die Community-Features 
(Punkte, Userprofile etc.) aktiviert sind.</p>


<P><b>Die SMS-Features funktionieren folgenderma�en:</b></p>

<li><b>Schritt 1: SMS Guthaben aufladen: </b>

<p>Gehen Sie im Chat-Men� auf den Punkt <b>\"EINSTELLUNGEN\"</b>. 
Hier klicken Sie auf den Men�punkt <b>\"SMS\"</b>. 
Wenn Sie im Profil Ihre Handy-Nummer angegeben haben, 
erhalten Sie nun die M�glichkeit, sich eine PIN-Nummer auf Ihr Handy schicken zu lassen. 
Dieser Punkt ist notwendig um zu verhindern, dass User �ber fremde Handy-Nummern SMS bestellen. 
Nun erhalten Sie eine SMS mit einer vierstelligen PIN-Nummer auf Ihr Handy. 
Diese PIN-Nummer geben Sie wiederum im Chat im SMS-Men� in das Feld <b>\"PIN eingeben\"</b> ein.</p>

<p>Der n�chste Punkt ist nun das eigentliche Aufladen des SMS-Guthabens. 
Sie w&auml;hlen einen Aufladebetrag und es wird Ihnen angezeigt, 
wie viele SMS Sie mit diesem Betrag verschicken k&ouml;nnen. 
Mit dem Klick auf \"Jetzt SMS Guthaben aufladen\" best�tigen Sie Ihre Auswahl.</p>

<p><b>Die Bezahlung der SMS erfolgt bequem per Lastschrift.</b> 

Hierzu geben Sie Ihre Bankverbindung und Kontonummer an. 
Ganz wichtig: Es ist unbedingt darauf zu achten, dass 
im oberen Feld unter \"Kontoinhaber\" nicht der eventuell vorausgef�llte Chatname, 
sondern der korrekte Name des Kontoinhabers steht!</p>

<p>Wir versichern, dass s�mtliche hier angegebenen 
Daten absolut diskret und vertrauensw�rdig behandelt 
und ausschlie�lich zur Bezahlung der SMS und auf keinen 
Fall zu irgendwelchen anderen Zwecken verwendet werden! </p>

<p>Sind alle Felder korrekt ausgef�llt, werden die Eingaben von Ihnen best�tigt 
und das SMS Konto wird aufgeladen.</p> 

<p><b>Es gibt allerdings eine Voraussetzung zum Aufladen eine SMS Kontos:<br>
Sie m&uuml;ssen mindestens 1000 Punkte im Userprofil im Chat haben.</b> 
Dies bedeutet allerdings auch, dass Chats, die die Punktez�hlung deaktiviert haben, 
Ihren Usern die SMS-Funktion leider nicht zur Verf�gung stellen k�nnen.</p> 

<p>Nun ist das SMS Konto aufgeladen, und es kann losgehen.</p>

<li> <b>Schritt 2: SMS empfangen und versenden: </b>

<p><b>Wichtig: Sie k�nnen SMS aus dem Chat auf das Handy eines Users versenden, 
der im Chat die Option aktiviert hat, SMS zu empfangen. 
Sie k�nnen jedoch keine SMS von Ihrem Handy in den Chat schicken. 
SMS m�ssen deshalb stets aus dem Chat selbst geschrieben werden!
</b></p>
<p>Wenn Sie SMS aus dem Chat empfangen m�chten, 
m�ssen Sie zuerst unter dem Chat-Men�punkt \"EINSTELLUNGEN / SMS\" das 
Dropdown-Auswahlfeld neben \"Ich m�chte SMS von anderen Usern aus dem Mainchat empfangen\" 
auf \"JA\" gestellt haben. Dies verhindert, dass User unerw�nschte SMS erhalten. 
Dies bedeutet nat�rlich auch, dass Sie nur SMS an Chat-User verschicken k�nnen, 
die diese auch ausdr�cklich empfangen m�chten.</p>

<p><b>Wichtig, wenn Sie eine SMS aus dem Chat erhalten:</b><br>
 ein einfaches Antworten auf diese SMS mit der regul�ren Antwort-Funktion Ihres
 Handys funktioniert hier nicht! Bitte SMS immer aus dem Chat schreiben.</p>


<p><b>So schicken Sie eine SMS an einen Chat-User:</b></p>

<p>Der Befehl zum Verschicken einer SMS auf das Handy eines Chatusers lautet: /sms <nickname> <text><br>

Wenn Sie also eine SMS mit dem Text \"Kommst Du in den Chat?\" auf das Handy des Users \"Pumuckl\" 
(dieser User muss nat�rlich in Ihrem Chat registriert sein und muss in
seinen Einstellungen angegeben haben, dass er SMS empfangen m�chte) senden m�chten, 
tippen Sie im Chat ganz einfach: <br>
/sms Pumuckl Kommst Du in den Chat?</p>";

$hilfe_privacy="<P>
Personenbezogene Daten sind Informationen, die dazu genutzt werden k�nnen,
Ihre Identit�t zu erfahren. Im Chat sind dies Informationen wie Ihr
richtiger Name, Ihre Adresse oder Ihre Telefonnummer, die Sie im Profil
hinterlegen k�nnen. Sie entscheiden in den Einstellungen Ihrer Homepage
frei, ob und welche der personenbezogenen Daten Sie auf Ihrer Homepage
ver�ffentlichen. Auch die Offenlegung Ihrer personenbezogenen Daten in Ihrem
Profil ist nat�rlich freiwillig.
</p><p>
Automatisch erstellte Statistiken, wie die User-Top10/100, fallen nicht
unter die personenbezogenen Daten. Ebenfalls ausgenommen ist die Darstellung
Ihres Nicknamens, Ihrer �ffentlichen E-Mail Adresse, Ihrer Punkte, Ihrer
Onlinezeit und der Zeitpunkt des ersten und letzten Logins in den Chat.
Falls Sie keine �ffentliche E-Mail Adresse w�nschen, l�schen Sie diese in
Ihren EINSTELLUNGEN.
</p><p>
Wir speichern Ihre Daten auf eigenen Servern, auf die nur unsere
Mitarbeiter Zugriff haben.  Bei Ihrem Login werden auf unseren Servern
Daten, wie IP-Adresse, Datum und Uhrzeit, f�r Sicherungszwecke gespeichert. 
Es findet keine personenbezogene Verwertung statt, wobei die statistische
Auswertung anonymisierter Datens�tze m�glich ist.
</p><p>
Wir geben keine personenbezogenen Daten an Dritte weiter oder verkaufen
diese. Soweit wir gesetzlich oder per Gerichtsbeschluss dazu verpflichtet 
sind, werden wir Ihre Daten an auskunftsberechtigte Stellen �bermitteln.
Die personenbezogenen Daten, die Sie in Ihr Profil eingegeben haben, k�nnen
Sie jederzeit wieder l�schen.
</p><p>
Die ehrenamtlichen Admins (Chatadmin, Superuser) des Chats genie�en eine besondere
Vertrauensstellung, da sie Zugriff auf personenbezogene Daten, wie Ihren
richtigen Name, Ihre Admin E-Mail Adresse und Ihre IP-Adressen mit Uhrzeit
und Datum haben.  Diese Daten d�rfen ausschlie�lich dazu genutzt werden,
User, die gegen die Chat-AGBs versto�en, zu identifizieren, aus dem Chat zu
entfernen und auch dauerhaft auszusperren. Die Admins haben auch das Recht,
zu diesen Zwecken einen Traceroute auf Ihren Rechner zu machen, den falsch
konfigurierte \"Personal Firewalls\" eventuell als Angriff erkennen k�nnen.
Auf Ihr Profil haben die Admins keinen Zugriff. Da Ihr Passwort
verschl�sselt gespeichert wird, k�nnen daher weder wir noch die Admins Ihr
Passwort lesen. Die Admin k�nnen allerdings die Passw�rter der User auf
besonderen Wunsch �ndern und das neue Passwort an die hinterlegte 
Admin-E-Mail Adresse schicken. Die Admin-E-Mail Adresse ist nur
durch Admins �nderbar. Die Admins sind verpflichtet, sich an diese
Datenschutzbestimmungen und an die Chat-AGBs zu halten und keine
personenbezogenen Daten an Dritte weiterzugeben.
</P><P>
Wir setzen im Chat prinzipiell keine Cookies. Falls Sie dennoch ein Cookie 
erhalten, stammt dieses Cookie aus der Anzeige einer Agentur, auf die wir keinen
Einfluss haben. Bitte deaktivieren Sie Cookies in Ihrem Browser, wenn Sie keine
Cookies empfangen m�chten.
</P>";
?>
