<?php

// fidion GmbH mainChat

// $Id: smilies.php

require("functions.php");

// Vergleicht Hash-Wert mit IP und liefert u_id, u_name, o_id, o_raum, o_js, u_level, admin
id_lese($id);

// Timestamp im Datensatz aktualisieren
aktualisiere_online($u_id, $o_raum);

echo "<HTML>\n<HEAD><TITLE>" . $body_titel
    . "_Info</TITLE><META CHARSET=UTF-8>\n";

echo "<SCRIPT LANGUAGE=\"JavaScript\">\n";
echo "  var http_host='$http_host';\n";
echo "  var id='$id';\n";
echo "  var stdparm='?http_host='+http_host+'&id='+id;\n";
echo "</SCRIPT><SCRIPT LANGUAGE=\"JavaScript\" src=\"jscript.js\"></script>\n";

echo $stylesheet . "<style type=\"text/css\">\n"
    . "a { text-decoration: none; font-weight:bold }\n" . "</style></HEAD>\n";

// Body-Tag definieren
echo "<BODY BGCOLOR=\"$farbe_mini_background\" "
    . (strlen($grafik_mini_background) > 0 ? "BACKGROUND=\"$grafik_mini_background\" "
        : "") . "TEXT=\"$farbe_mini_text\" " . "LINK=\"$farbe_mini_link\" "
    . "VLINK=\"$farbe_mini_vlink\" " . "ALINK=\"$farbe_mini_vlink\">\n";

// Login ok?
if (strlen($u_id) != 0) :
    // Menue ausgeben, Tabelle aufbauen
    if (!isset($r_name)) {
        $r_name = "";
    }
    $linkuser = "href=\"user.php?http_host=$http_host&id=$id&aktion=chatuserliste\"";
    $linksmilies = "href=\"" . $smilies_datei
        . "?http_host=$http_host&id=$id\"";
    echo "<CENTER><B>$r_name</B><BR>$f3<B>[<a onMouseOver=\"return(true)\" $linksmilies>"
        . $t['sonst1'] . "</A>]&nbsp;"
        . "[<a onMouseOver=\"return(true)\" $linkuser>" . $t['sonst2']
        . "</A>]</B>$f4<BR>"
        . "<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\" >\n";
    
    // Unterscheidung Jacascript an/aus
    if ($o_js) {
        
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
            . "   );\n" . "   showsmilies(liste);\n" . 
            //			     "   stdparm=''; stdparm2=''; id=''; http_host=''; u_nick=''; raum=''; nlink=''; nick=''; url='';\n".
            "</SCRIPT>\n";
        
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
    
    echo "</TABLE>"
        . "<B>$r_name</B><BR>$f3<B>[<a onMouseOver=\"return(true)\" $linksmilies>"
        . $t['sonst1'] . "</A>]&nbsp;"
        . "[<a onMouseOver=\"return(true)\" $linkuser>" . $t['sonst2']
        . "</A>]</B>$f4</CENTER>";

else :
    echo "<P ALIGN=CENTER>$t[sonst15]</P>\n";
endif;

?>

</BODY></HTML>
