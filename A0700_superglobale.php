<?php

  /*
    Superglobale


    Was ist ein Superglobal?

    Es gibt einige vordefinierte Variablen von PHP, welche vom Server mit bestimmten Werten gefüllt werden – diese nennt man Superglobal. Dieser Name kommt daher, dass diese Variablen im kompletten Script verfügbar sind und daher keine Beschränkung im sogenannten Scope (Sichtbarkeit) haben – also auch in Funktionen, Schleifen und Bedingungen zum Beispiel einfach aufgerufen werden können. In diesem Artikel werden wir die einzelnen Superglobals durchgehen und uns die Werte, die sie enthalten, etwas näher betrachten.

    Welche Superglobals gibt es?

    $GLOBALS
    $_SERVER


    $_GET
    $_POST
    $_FILES
    $_REQUEST


    $_COOKIE
    $_SESSION
    $_ENV


    $GLOBALS

    $GLOBALS ist ein Array, welches alle Variablen enthält, die im globalen Kontext vorhanden sind. Die Namen der Variablen sind dabei die Keys dieses Arrays.

    $_SERVER

    Die $_SERVER Variable enthält viele Informationen wie zum Beispiel Headerdaten, den Pfad zum aktuell ausgeführten PHP Script, IP oder URL des Servers und so weiter. Dieses Array wird vom Webserver befüllt und kann vom Programmierer dann einfach verwendet werden.

    $_GET

    GET Daten können über die URL des Scripts angehängt werden. Rufen wir zum Beispiel folgende URL auf:
    http://localhost/meinscript.php?variable1=hallo&variable2=welt

    Dabei werden die Variablen variable1 und variable2 an das Script als GET Daten übergeben. Diese werden dann vom PHP Interpreter automatisch im $_GET Array abgelegt, und zwar jeweils mit dem Namen als Key. Wird dieselbe Variable mehrfach übergeben überschreiben die späteren Werte jeweils den Ursprungswert im Array, das heißt nur die letzte Variable ist auch wirklich im Array zu finden.

    $_POST

    Das $_POST Superglobal-Array lässt sich mit dem $_GET vergleichen, mit dem einzigen Unterschied, dass hier (wie der Name ja schon sagt) die POST Daten ankommen – zum Beispiel aus Formularen oder von AJAX Requests. Also Daten, die mit einem POST Request an den Server gesendet werden, werden in dieses Array gespeichert – auch hier ist der Variablenname wieder der Key im Array.

    $_FILES

    Bei $_FILES handelt es sich um ein mehrdimensionales Array. Laden wir über ein <file> Tag in einem Formular eine (oder mehrere) Dateien hoch landen diese im $_FILES Array, wobei der Name des Tags dabei den Key im Array darstellt. Hinter jedem Key verbirgt sich hier aber ein weiteres assoziatives Array mit folgenden Werten:

    name – der Name der Datei, die hochgeladen wurde
    type – der Dateityp als MIME Type (z.B. image/jpeg)
    size – die Größe der Datei in Bytes
    tmp_name – der Pfad zur temporären Datei (diese muss dann an den Zielort verschoben werden)
    error – ein möglicher Fehlercode, falls Fehler beim Upload auftraten


    $_COOKIE

    Wenn du auf dem Rechner des Besuchers ein Cookie speicherst wird das vom Browser automatisch an unseren Webserver mitgesendet. Diese Cookies werden dann in PHP in das $_COOKIE Superglobal-Array geladen, der Name des Cookies stellt hierbei den Key dar.



    $_SESSION

    Sessions funktionieren ähnlich wie Cookies, allerdings werden die Daten auf dem Webserver abgespeichert und sind normalerweise nur so lange vorhanden, wie der Browser geöffnet ist. Werden für einen Besucher Daten in einer Session gefunden, speichert PHP diese im $_SESSION Superglobal-Array – wiederum mit dem Namen der Variablen als Key.

    $_REQUEST

    Dieses Superglobal-Array enthält kombiniert die Werte aus $_GET, $_POST und $_COOKIE, also alle Werte die vom Browser des Besuchers mitgesendet werden.



    $_ENV

    Im $_ENV Array werden Werte vom System gespeichert, unter dem PHP läuft. Hier gibt es keine feste Liste an Werten, da das vom jeweiligen System abhängt.
  */



?>