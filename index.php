<?php 

require_once("vendor/autoload.php");//chamo todos os arquivos

use \Slim\Slim;//especifico os arquivos
use \Hcode\Page;

$app = new Slim();//novas rotas

$app->config('debug', true);

/*qual a rota que estou chamando*/
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->run();//faz rodar

 ?>