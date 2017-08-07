<?php
    print "<h3>Pagina de contactos</h3>";

    foreach($data as $key=>$item){
        print $key . ": " . $item . "<br>";
    }

    print "voltar à <a href=\"public/home\">pagina inicial</a>";
?>
