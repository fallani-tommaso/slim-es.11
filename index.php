<?php
use Slim\Factory\AppFactory;

require __DIR__ .'/vendor/autoload.php';
include __DIR__ .'/controllers/AlunniController.php';

$app = AppFactory::create();

$app->get('/alunni', 'AlunniController:json_alunni');

$app->get('/alunni/{nome_alunno}', 'AlunniController:json_show');

$app->post('/alunni', 'AlunniController:json_post');

$app->put('/alunni/{id}', 'AlunniController:json_put');

$app->delete('/alunni/{id}', 'AlunniController:json_delete');


$app->run();