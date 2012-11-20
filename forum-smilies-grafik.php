<?php

// fidion GmbH mainChat

// $Id: smilies-grafik.php

require ("functions.php");
require ("conf/deutsch.php-smilies-grafik.php");

// Vergleicht Hash-Wert mit IP und liefert u_id, u_name, o_id, o_raum, o_js, u_level, admin
id_lese($id);


// optional Konfiguration für smilies lesen
if (isset($smiles_config) && $smilies_config && file_exists("conf/".$smilies_config)):
	unset($smilie);
	unset($smilietxt);
	require("conf/".$smilies_config);
endif;


echo "<HTML>\n<HEAD><TITLE>".$body_titel."_Info</TITLE><META CHARSET=UTF-8>\n";

echo "<SCRIPT LANGUAGE=\"JavaScript\">\n";
echo "  var http_host='$http_host';\n";
echo "  var id='$id';\n";
echo "  var stdparm='?http_host='+http_host+'&id='+id;\n";
?>
function showsmiliegrafiken( liste ) {
     for(var i=0; i<liste.length; i+=3) {
         var rowdef = "<TD ALIGN=CENTER><A HREF=\"#\" onMouseOver=\"return(true)\" onClick=\"appendtext_opener(' "+liste[i]+" '); return(false)\"><IMG SRC=\""+smilies_pfad+liste[i+1]+"\" BORDER=0 ALT=\""+liste[i]+"\"></A></TD>";
         rowdef += "<TD>"+fett[4]+liste[i+2]+fett[5]+"</TD>";
         document.write("<TR BGCOLOR=\""+color[i/2&1]+"\">"+rowdef+"</TR>\n");
     }
}
function appendtext_opener( text ) {
     opener.parent.frames['forum'].document.forms['form'].elements['po_text'].value=text + opener.parent.frames['forum'].document.forms['form'].elements['po_text'].value;
     opener.parent.frames['forum'].document.forms['form'].elements['po_text'].focus();
}
<?php
echo "</SCRIPT>\n";

echo $stylesheet.
	"<style type=\"text/css\">\n".
	"a { text-decoration: none; font-weight:bold }\n".
	"</style></HEAD>\n";  

// Body-Tag definieren
echo "<BODY BGCOLOR=\"$farbe_mini_background\" ".
   (strlen($grafik_mini_background)>0?"BACKGROUND=\"$grafik_mini_background\" ":"").
                "TEXT=\"$farbe_mini_text\" ".
                "LINK=\"$farbe_mini_link\" ".
                "VLINK=\"$farbe_mini_vlink\" ".
                "ALINK=\"$farbe_mini_vlink\">\n";



// Login ok?
if (strlen($u_id)!=0):

		// Farben einstellen
		if ($smilies_hintergrund):
			$farbe_tabelle_zeile1=$smilies_hintergrund;
			$farbe_tabelle_zeile2=$smilies_hintergrund;
		endif;

			
		echo "<CENTER><TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"3\">\n";

		// Unterscheidung Javascript an/aus
                if ( $o_js ) {
			 echo "<tr><td colspan=\"2\" align=\"center\"><a href=# onClick=\"window.close()\">$f3 Fenster schliessen $f4</a></td></tr><tr><td colspan=\"2\">&nbsp;</td></tr>\n";
			// Array mit Smilies einlesen, Tabelle in Javascript ausgeben
			reset($smilie);
			while(list($smilie_code,$smilie_grafik)=each($smilie)) {
				$jsarr[] = "'$smilie_code','$smilie_grafik','".str_replace(" ","&nbsp;",$smilietxt[$smilie_code])."'";
			}

                        echo "\n\n<SCRIPT LANGUAGE=\"JavaScript\">\n".
			     "   var color         = new Array('$farbe_tabelle_zeile1','$farbe_tabelle_zeile2');\n".
			     "   var fett          = new Array('$f1<B>','</B>$f2','$f3','$f4','$f1','$f2');\n".
			     "   var smilies_pfad  = '$smilies_pfad';\n".
			     "   var liste         = new Array(\n   ".
			     @implode(",\n   ",$jsarr).
			     "   );\n".
			     "   showsmiliegrafiken(liste);\n".
//			     "   stdparm=''; stdparm2=''; id=''; http_host=''; u_nick=''; raum=''; nlink=''; nick=''; url='';\n".
			     "</SCRIPT>\n";
			echo "<tr><td colspan=\"2\">&nbsp;</td></tr><tr><td colspan=\"2\" align=\"center\"><a href=# onClick=\"window.close()\">$f3 Fenster schliessen $f4</a></td></tr>\n";
		} else {  // kein javascript verfügbar

			// Array mit Smilies einlesen, HTML-Tabelle ausgeben
			reset($smilie); $schalt=TRUE;
			while(list($smilie_code,$smilie_grafik)=each($smilie)) {
				if ($schalt) {
					$farbe_tabelle=$farbe_tabelle_zeile1;
					$schalt=FALSE;
				} else {
					$farbe_tabelle=$farbe_tabelle_zeile2;
					$schalt=TRUE;
				}
				echo "<TR BGCOLOR=\"$farbe_tabelle\">".
					"<TD>$f1<B>$smilie_code</B>$f2</TD>".
					"<TD>".$f1.str_replace(" ","&nbsp;",$smilietxt[$smilie_code]).$f2."</TD>".
					"<TD><IMG SRC=\"".$smilies_pfad.$smilie_grafik."\"></TD>".
					"</TR>\n";
			}
		}

		echo "</TABLE></CENTER>";



else:
	echo "<P ALIGN=CENTER>$t[sonst15]</P>\n";
endif;



?>

</BODY></HTML>
