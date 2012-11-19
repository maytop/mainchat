<?php
// Sprachdefinition deutsch

setlocale (LC_TIME, "de_DE");

// Kurzer Hilfstext
$hilfstext=array(1=>	"<B>/user RAUM -</B> listet alle User im Raum (*=alle R�ume)",
			"<B>/raum RAUM -</B> wechselt in RAUM (legt ggf. RAUM neu an), ohne Angabe von RAUM werden alle R�ume gelistet",
			"<B>/zeige NAME-</B> Gibt die Benutzerinformationen f�r NAME aus (%=Joker)",
			"<B>/msg NAME TEXT -</B> TEXT an User NAME fl�stern",
			"<B>/me TEXT -</B> Spruch im Raum",
			"<B>/weg TEXT-</B> setzt oder l�scht einen ich-bin-nicht-da Text",
			"<B>/nick NAME -</B> Setzt Nickname auf NAME",
 			"<B>/ignore NAME -</B> Ignoriert User NAME, ohne Angabe von NAME werden alle ignorierten User gezeigt",
			"<B>/kick NAME -</B> Sperrt User NAME aus dem aktuellen Raum aus (oder Freigabe)",
			"<B>/farbe RRGGBB -</B> Setzt neue Farbe auf RRGGBB, ohne Angabe von RRGGBB wird die aktuelle Farbe angezeigt",
			"<B>/op TEXT -</B> ruft einem Admin um Hilfe",
			"<B>/einlad NAME -</B> L�d User in eigene Raum ein oder zeigt die Einladungen",
			"<B>/quit TEXT -</B> beendet chat mit den Worten TEXT",
			"<B>/suche NAME -</B> Sucht alle Spr�che die das Wort NAME enthalten",
			"<B>=spruch (NAME ZUSATZ optional) -</B> gibt vordefinierten Spruch aus",
			"<B>*TEXT* -</B> Text ist kursiv",
			"<B>_TEXT_ -</B> Text ist fett",
			"<B>USER direkt ansprechen -</B> USER: oder @USER ergibt [USER:]",
			"<B>F�r die ausf�hrliche Hilfe mit allen Befehlen klicken Sie bitte auf [HILFE] unter der Eingabezeile.</B>");


// Texte Userlevel 
$level['C']=		"ChatAdmin";
$level['S']=		"Superuser";
$level['A']=		"Admin(temp)";
$level['G']=		"Gast";
$level['U']=		"User";
$level['M']=		"Moderator";
$level['B']=		"Besitzer";
$level['Z']=		"Gesperrt";

// Text Besitzer/Userlevel Kurzform
$leveltext['C']=		"Admin";
$leveltext['S']=		"Admin";
$leveltext['A']=		"Admin";
$leveltext['G']=		"Gast";
$leveltext['U']=		"";
$leveltext['M']=		"Moderator";
$leveltext['B']=		"Besitzer";

// Texte Status R�ume
// achtung: gro�-kleinschreibung ist wichtig.
$raumstatus1['O']=	"offen";
$raumstatus1['G']=	"geschlossen";
$raumstatus1['L']=	"Teergrube";
$raumstatus1['m']=	"moderiert";
$raumstatus1['M']=	"Moderiert+geschl.";
$raumstatus2['T']=	"tempor�r";
$raumstatus2['P']=	"permanent";

// Text o_who - wo in der Community befindet sich der User
$whotext[0]="CHAT";
$whotext[1]="LOGIN";
$whotext[2]="FORUM";

// Texte m�glicher Namen f�r G�ste
$gast_name=array(1=>	"Urzel","Murzel","Hurzel","Kurzel","Wurzel","Purzel");


$hilfe_spruchtext=	"<B>Format:</B> '=SPRUCH USER ZUSATZTEXT'<BR><BR>".
			"Je nach Typ mu� USER (=Name eines Users im Chat) oder ".
			"ZUSATZTEXT (=freier Text) eingegeben werden:".
			"<UL><LI><B>Typ 0:</B> kein USER oder ZUSATZTEXT".
			"<LI><B>Typ 1:</B> nur USER oder stattdessen ZUSATZTEXT (je nach Sinn)".
			"<BR>Wenn ein USER angegeben wird, gen�gt <b>bob</b> um das per Nickerg�nzung auf <b>bobby</b> zu erweitern.".
			"Wird die Nickerg�nzung nicht gew�nscht, oder ist im ZUSATZTEXT ein Leerzeichen enthalten, mu� der Text in \" gesetzt werden.".
			"<LI><B>Typ 2:</B> USER und ZUSATZTEXT".
			"<BR>Hier kann auch USER und ZUSATZTEXT Leerzeichen enthalten, wenn der Text in \" gesetzt wird, oder alternativ das Leerzeichen durch ein + ersetzt wird.".
			"</UL>In den Spr�chen wird immer <B>�0</B> durch den eigenen Nicknamen ersetzt. ".
			"Zum weiteren Verst�ndnis probieren Sie einfach die Spr�che aus.<BR><BR>".
			"Um bestimmte Spr�che auszuw�hlen ist es am einfachsten, im Chat ".
			"mit dem /such Befehl und einem Stichwort nach dem gew�nschten Spruch ".
			"zu suchen.<BR>";
?>
