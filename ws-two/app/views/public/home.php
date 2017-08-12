<?php

print "<h3>Main Page</h3>";
//print "Nome: " . $data->name;
foreach($data as $key=>$items){
    if($key === 'products'){
        foreach($items as $item){
            print "#" . $item['code'] . " - " . $item['name'] . " " . $item['price'] . " AOA <br><a href=\"?adicionar=" . $item['code'] . "\">adicionar</a><br><br>";
        }
    }
}

?>
