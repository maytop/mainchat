<?php

// fidion GmbH mainChat
// $Id: aktion.php,v 1.3 2012/10/17 06:16:53 student Exp $

require ("functions.php");

// Vergleicht Hash-Wert mit IP und liefert u_id, u_name, o_id, o_raum, u_level, o_js
id_lese($id);


// Kopf ausgeben
?>
<HTML>
<HEAD><TITLE><?php echo $body_titel."_Aktionen"; ?></TITLE>
<SCRIPT LANGUAGE=JavaScript>
        window.focus()
        function win_reload(file,win_name) {
                win_name.location.href=file;
}
        function opener_reload(file,frame_number) {
                opener.parent.frames[frame_number].location.href=file;
}
</SCRIPT>
<?php echo $stylesheet; ?>
</HEAD> 
<?php

// Body-Tag definieren
$body_tag="<BODY BGCOLOR=\"$farbe_mini_background\" ";
if (strlen($grafik_mini_background)>0):
        $body_tag=$body_tag."BACKGROUND=\"$grafik_mini_background\" ";
endif;
$body_tag=$body_tag."TEXT=\"$farbe_mini_text\" ".
                "LINK=\"$farbe_mini_link\" ".
                "VLINK=\"$farbe_mini_vlink\" ".
                "ALINK=\"$farbe_mini_vlink\">\n";
echo $body_tag;





// Timestamp im Datensatz aktualisieren
aktualisiere_online($u_id,$o_raum);


// Browser pr�fen
if (ist_netscape()) {
        $eingabe_breite=45;
} else {
        $eingabe_breite=70;
}


if ($u_id && $communityfeatures) {


	// Men� als erstes ausgeben
	$box = $ft0."Men� Aktionen".$ft1;
	$text = "<A HREF=\"hilfe.php?http_host=$http_host&id=$id&aktion=community#home\">Hilfe</A>\n";
	show_box2 ($box,$text,"100%");
	echo "<IMG SRC=\"pics/fuell.gif\" ALT=\"\" WIDTH=4 HEIGHT=4><BR>\n";


	switch($aktion) {

	case "eintragen":

		// Ab in die Datenbank mit dem Eintrag
		eintrag_aktionen($aktion_datensatz);
		zeige_aktionen("normal");
		break;

	default:
		zeige_aktionen("normal");
	}


	echo "<P><B>Tipps zur den Aktionen:</B></P>".
	"<P>Mit den Aktionen steuern Sie, bei welchen Ereignissen Sie mit ".
	"welcher Nachricht informiert werden wollen. Ein Ereignis ist z.B. ".
	"der Logon oder Logout eines <B>Freundes</B>, oder auch der Eingang einer ".
	"neuen <B>Mail</B>.</P>".
	"<P>Wann Sie die Nachricht erhalten wollen, w�hlen Sie aus der obersten Zeile aus. " .
	"M�glich ist der Empfang sofort wenn Sie online sind (<B>Sofort/Online</B>) ".
	"(z.B. <B>Freund</B> loggt ein/aus ".
	"oder zu dem Moment, in dem Sie eine <B>Neue Mail</B> erhalten), bei Ihrem ".
	"<B>Login</B> in den Chat oder regelm��ig ".
	"<B>alle 5 Minuten</B> (regelm��ige Information �ber die vorliegenden ".
	"<B>Neuen Mails</B> oder die Anwesendheit Ihrer <B>Freunde</B> im Chat)</P>".
	"<P>Die Benachrichtungen, die Sie erhalten, wenn Sie nicht im Chat sind (offline), ".
	"w�hlen Sie unter <B>Sofort/Offline</B> aus.</P>".
	"<P>Die Art der Nachricht ist einstellbar, so gibt es <B>keine</B> Benachrichtigung, ".
	"<B>Chat-Mail</B> (chat-interne Mail), eine <B>E-Mail</B> an Ihre nicht-�ffentliche ".
	"E-Mail Adresse oder eine <B>OLM</B> (OnLineMessage, direkte Nachricht in Chat wie ".
	"/msg).".
	"Zus�tzlich sind auch Kombinationen von <B>E-Mail und OLM</B> sowie <B>Chat-Mail ".
	"und OLM</B> m�glich, wobei Sie in diesem Fall zwei Nachrichten erhalten.</P>";

	if ($smsfeatures) {
	echo "<P><B><A href=\"hilfe.php?http_host=$http_host&id=$id&aktion=community#sms\">SMS</A></B> ".
		"ist die Benachrichtung via <B>SMS auf Ihr Handy</B>, falls Sie f�r SMS freigeschaltet sind, ".
		"eine Handy-Nummer eingetragen haben und ein Guthaben auf Ihrem Konto besteht. Ihr ".
		"Konto k�nnen Sie <A HREF=\"sms.php?http_host=$http_host&id=$id\">hier aufladen</A>. ".
		"Auch SMS k�nnen Sie wie OLM mit anderen Benachrichtigungsformen kombinieren.</P>";
	};
}
	

if ($o_js || !$u_id):
	echo $f1."<CENTER>[<A HREF=\"javascript:window.close();\">$t[sonst1]</A>]</CENTER>".$f2."<BR>\n";
endif;

?>
</BODY></HTML>
