#!/usr/bin/env php

<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use MarcusLoki\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-mobile/android');

foreach ($cursos as $curso){
    echo exibeMensagem($curso);
}

?>