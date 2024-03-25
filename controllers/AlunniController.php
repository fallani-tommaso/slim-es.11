<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__ .'/../Classe.php';

class AlunniController{
    function json_alunni(Request $request, Response $response, $args){
        $miaclasse = new Classe();
        $response->getBody()->write(json_encode($miaclasse));
        return $response->withHeader("Content-type","application/json")->withStatus(200);
    }

    function json_show(Request $request, Response $response, $args){
        $miaclasse = new Classe();
        $nome = $args['nome_alunno'];
        $x = $miaclasse->getAlunnoByNome($nome);
        if($x)
        {
            $response->getBody()->write(json_encode($x));
            return $response->withHeader("Content-type","application/json")->withStatus(200);
        }    

        $response->getBody()->write(json_encode(['Error'=>'Alunno non trovato']));
        return $response->withHeader("Content-type","application/json")->withStatus(404);
    }

    function json_post(Request $request, Response $response, $args){
        $dati = json_decode($request -> getBody()->getContents(), true);

        $response->getBody()->write("Il nome è " . $dati["nome"]);
        return $response;

    }

    function json_put(Request $request, Response $response, $args){
        $dati = json_decode($request -> getBody()->getContents(), true);

        $response->getBody()->write("Modifica alunno: " . $args["id"] . "| nome: " . $dati["nome"] . "| cognome: " . $dati["cognome"]);
        return $response;
    }

    function json_delete(Request $request, Response $response, $args){
        $response->getBody()->write("Cancella Alunno: " . $args["id"]);
        return $response;
    }
}
?>