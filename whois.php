<?php

require_once 'vendor/autoload.php'; //autoload do composer

$whois = new Whois(); //instanciando a classe Whois
$result = $whois->lookup($argv[1]); //realizando a pesquisa ao whois utilizando o segundo argumento do comando PHP como o domínio
print_r($result); //exibindo o resultado (aqui você pode melhorar essa exibição)