<?php

// fidion GmbH mainChat

// $Id: log.php,v 1.8 2012/10/17 06:16:53 student Exp $

// log.php muss mit id=$hash_id aufgerufen werden

require ("functions.php");


// Falls Abspeichern, Header senden
if ($aktion=="abspeichern"):
//	$dateiname="log-$admin".date("dmyHi").".htm";
	$dateiname="log-".date("YmdHi").".htm";

	header("Content-Description: File Transfer");
	header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$dateiname\"");
        header("Content-Location: $dateiname");
        
        if ($SSLRedirect == "1")      
	{       
		header("Cache-Control: maxage=15"); //In seconds
		header("Pragma: public");
	}
endif;



// Userdaten setzen
id_lese($id);

if (($eingabe_light_log=="1") && (!$admin))
{
	echo "Sorry, deaktiviert";
	exit();
}

// Userdaten gesetzt?
if (strlen($u_id)>0):

	// Timestamp im Datensatz aktualisieren
	aktualisiere_online($u_id,$o_raum);

	// Fenstername
        $fenster=str_replace("+","",$u_nick);
	$fenster=str_replace("-","",$fenster);
	$fenster=str_replace("ä","",$fenster);
	$fenster=str_replace("ö","",$fenster);
	$fenster=str_replace("ü","",$fenster);
	$fenster=str_replace("Ä","",$fenster);
	$fenster=str_replace("÷","",$fenster);
	$fenster=str_replace("Ü","",$fenster);
	$fenster=str_replace("ß","",$fenster);

	// Kopf ausgeben
?>
<HTML>
<HEAD><TITLE><?php echo $body_titel."-Log ".date("d.m.y H:i"); ?></TITLE>
<SCRIPT LANGUAGE=JavaScript>
        window.focus()     
        function neuesFenster(url,name) {
             hWnd=window.open(url,name,"resizable=yes,scrollbars=yes,width=300,height=700");
        }
        function neuesFenster2(url) {
             hWnd=window.open(url,"640_<?php echo $fenster; ?>","resizable=yes,scrollbars=yes,width=780,height=580");
        }
</SCRIPT>
<?php echo $stylesheet; ?>
</HEAD> 
<?php

		// Body-Tag definieren
		$body_tag="<BODY BGCOLOR=\"$farbe_chat_background1\" ";
		if (strlen($grafik_background1)>0):
			$body_tag=$body_tag."BACKGROUND=\"$grafik_background1\" ";
		endif;
		$body_tag=$body_tag."TEXT=\"$farbe_chat_text1\" ".
				"LINK=\"$farbe_chat_link1\" ".
				"VLINK=\"$farbe_chat_vlink1\" ".
				"ALINK=\"$farbe_chat_vlink1\">\n";
		echo $body_tag;

		// Voreinstellungen
		// Trigger für die Ausgabe der letzten 100 Nachrichten setzen
		if ($back==0) $back=100;
		if ($back > 250) $back=250;

		// Admins: Trigger für die Ausgabe der letzten 1000 Nachrichten setzen
		if ($admin) $back=1000;

		// Systemnachrichten nicht ausgeben als Voreinstellung
		if (!isset($sysmsg)) $sysmsg=0;
		if ($sysmsg):
			$umschalturl="<A HREF=\"$PHP_SELF?id=$id&http_host=$http_host&sysmsg=0&back=$back\">".
					$t['sonst3']."</A>";
		else:
			$umschalturl="<A HREF=\"$PHP_SELF?id=$id&http_host=$http_host&sysmsg=1&back=$back\">".
					$t['sonst2']."</A>";
		endif;

		// Link zum Abspeichern
		if ($aktion!="abspeichern"):
			echo "<CENTER>".$f1.
				"<B>[<A HREF=\"$PHP_SELF?id=$id&http_host=$http_host&aktion=abspeichern&sysmsg=$sysmsg&back=$back\">".
				$t['sonst1']."</A>]</B>&nbsp;<B>[$umschalturl]</B>".
				$f2."</CENTER><BR>\n";
			flush();
		endif;

		// Log ausgeben
		chat_lese($o_id,$o_raum,$u_id,$sysmsg,$ignore,$back);
		// chat_lese($o_id,$o_raum,$u_id,FALSE,$ignore,$back,TRUE);
		
		// fuss
		echo "</BODY></HTML>\n";
endif;

?>