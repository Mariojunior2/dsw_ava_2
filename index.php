<?php
use PhpParser\Node\Stmt\While_;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;
use Slim\Factory\AppFactory;
use Projetux\Service\TarefaService;
use Projetux\infra\Debug;
use Projetux\Math\Basic;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$errorMiddleware->setErrorHandler(HttpNotFoundException::class, function (
    Request $request,
    Throwable $expection,
    bool $diplayErrorDetails,
    bool $logErrors,
    bool $logErrorDetails
) use ($app) {
    $response = $app->getResponseFactory()->createResponse();
    $response->getBody()->write('{"error": "não encontrado"}');
    return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
});



$app->get('/uma-api', function(Request $request, Response $response, array $args) {
    $response->getBody()->write('{"API": "Uma API (Interface de Programação de Aplicações) é um conjunto de regras que permite a comunicação entre sistemas diferentes. Ela age como intermediária, recebendo solicitações, processando-as e retornando respostas, sem expor detalhes internos do sistema que a consome. Exemplo: um app de clima usando uma API para obter dados meteorológicos."}');
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

$app->get('/codigos', function(Request $request, Response $response, array $args) {
    $response->getBody()->write('"status_resposta_http": {
    "1xx (Informativo)": "Indica que a solicitação foi recebida e está em processamento (ex: 100 - Continue).",
    "2xx (Sucesso)": "Solicitação bem-sucedida (ex: 200 - OK, 201 - Created).",
    "3xx (Redirecionamento)": "Indica que ação adicional é necessária para completar a solicitação (ex: 301 - Moved Permanently).",
    "4xx (Erro do cliente)": "Erro causado pela solicitação inválida (ex: 400 - Bad Request, 404 - Not Found).",
    "5xx (Erro do servidor)": "Falha no servidor ao processar a solicitação válida (ex: 500 - Internal Server Error)."
  }');
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});








$app->run();