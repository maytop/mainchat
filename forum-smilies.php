<?php

// fidion GmbH mainChat

// $Id: smilies.php

require("functions.php");
require("conf/deutsch.php-smilies.php");

// Vergleicht Hash-Wert mit IP und liefert u_id, u_name, o_id, o_raum, o_js, u_level, admin
id_lese($id);

echo "<HTML>\n<HEAD><TITLE>" . $body_titel
    . "_Info</TITLE><META CHARSET=UTF-8>\n";
?>
<SCRIPT LANGUAGE="JavaScript">
<?php
echo "  var http_host='$http_host';\n";
echo "  var id='$id';\n";
echo "  var stdparm='?http_host='+http_host+'&id='+id;\n";
?>
function showsmilies( liste ) {
     for(var i=0; i<liste.length; i+=2) {
         var rowdef = "<TD>&nbsp;"+fett[0]+"<A HREF=\"#\" onMouseOver=\"return(true)\" onClick=\"appendtext_opener(' "+liste[i]+" '); return(false)\">"+liste[i]+"</A>"+fett[1]+"&nbsp;</TD>";
         rowdef += "<TD>"+fett[4]+liste[i+1]+fett[5]+"</TD>";
         document.write("<TR BGCOLOR=\""+color[i/2&1]+"\">"+rowdef+"</TR>\n");
     }
}

function appendtext_opener( text ) {
     opener.parent.frames['forum'].document.forms['form'].elements['po_text'].value=text + opener.parent.frames['forum'].document.forms['form'].elements['po_text'].value;
     opener.parent.frames['forum'].document.forms['form'].elements['po_text'].focus();
}
<?php
echo "</SCRIPT>\n";

echo $stylesheet . "<style type=\"text/css\">\n"
    . "a { text-decoration: none; font-weight:bold }\n" . "</style></HEAD>\n";

// Body-Tag definieren
echo "<BODY BGCOLOR=\"$farbe_mini_background\" "
    . (strlen($grafik_mini_background) > 0 ? "BACKGROUND=\"$grafik_mini_background\" "
        : "") . "TEXT=\"$farbe_mini_text\" " . "LINK=\"$farbe_mini_link\" "
    . "VLINK=\"$farbe_mini_vlink\" " . "ALINK=\"$farbe_mini_vlink\">\n";

// Login ok?
if (strlen($u_id) != 0) :
    echo "<CENTER><TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n";
    
    // Unterscheidung Javascript an/aus
    if ($o_js) {
        echo "<tr><td colspan=\"2\" align=\"center\"><a href=# onClick=\"window.close()\">$f3 Fenster schliessen $f4</a></td></tr><tr><td colspan=\"2\">&nbsp;</td></tr>\n";
        // Array mit Smilies einlesen, Tabelle in Javascript ausgeben
        reset($smilie);
        while (list($smilie_code, $smilie_text) = each($smilie)) {
            $jsarr[] = "'$smilie_code','"
                . str_replace(" ", "&nbsp;", $smilie_text) . "'";
        }
        
        echo "\n\n<SCRIPT LANGUAGE=\"JavaScript\">\n"
            . "   var color = new Array('$farbe_tabelle_zeile1','$farbe_tabelle_zeile2');\n"
            . "   var fett  = new Array('$f1<B>','</B>$f2','$f3','$f4','$f1','$f2');\n"
            . "   var liste = new Array(\n   " . @implode(",\n   ", $jsarr)
            . "   );\n" . "   showsmilies(liste);\n" . "</SCRIPT>\n";
        
        echo "<tr><td colspan=\"2\">&nbsp;</td></tr><tr><td colspan=\"2\" align=\"center\"><a href=# onClick=\"window.close()\">$f3 Fenster schliessen $f4</a></td></tr>\n";
        
    } else { // kein javascript verfügbar
    
    // Array mit Smilies einlesen, HTML-Tabelle ausgeben
        reset($smilie);
        $schalt = TRUE;
        while (list($smilie_code, $smilie_text) = each($smilie)) {
            if ($schalt) {
                $farbe_tabelle = $farbe_tabelle_zeile1;
                $schalt = FALSE;
            } else {
                $farbe_tabelle = $farbe_tabelle_zeile2;
                $schalt = TRUE;
            }
            echo "<TR BGCOLOR=\"$farbe_tabelle\"><TD>$f1<B>$smilie_code</B>$f2</TD>"
                . "<TD>" . $f1 . str_replace(" ", "&nbsp;", $smilie_text) . $f2
                . "</TD></TR>\n";
        }
    }
    
    echo "</TABLE></CENTER>";

else :
    echo "<P ALIGN=CENTER>" . $t['sonst15'] . "</P>\n";
endif;

?>

</BODY></HTML>
